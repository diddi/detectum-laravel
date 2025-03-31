<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the user's events.
     */
    public function index()
    {
        $user = Auth::user();
        $volunteer = $user->volunteer;
        
        // Get events the volunteer is registered for
        $upcomingEvents = $volunteer->events()
            ->where('datum', '>=', now())
            ->orderBy('datum', 'asc')
            ->get();
            
        // Get events proposed by the volunteer
        $proposedEvents = Event::where('created_by', $user->id)
            ->orderBy('datum', 'asc')
            ->get();
            
        return view('pages.evenementen-index', compact('upcomingEvents', 'proposedEvents'));
    }

    /**
     * Show the form for registering for an event.
     */
    public function showRegistrationForm($id)
    {
        $event = Event::findOrFail($id);
        return view('pages.evenementen-register', compact('event'));
    }

    /**
     * Register the user for an event.
     */
    public function register(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $volunteer = Auth::user()->volunteer;
        
        // Check if already registered
        if ($volunteer->events()->where('event_id', $event->id)->exists()) {
            return redirect()->back()->with('error', 'Je bent al ingeschreven voor dit evenement.');
        }
        
        // Check if event is full
        if ($event->max_deelnemers && $event->volunteers()->count() >= $event->max_deelnemers) {
            return redirect()->back()->with('error', 'Dit evenement is helaas vol.');
        }
        
        // Register for the event
        $volunteer->events()->attach($event->id);
        
        return redirect()->route('evenementen.index')->with('success', 'Je bent succesvol ingeschreven voor dit evenement.');
    }

    /**
     * Cancel registration for an event.
     */
    public function cancelRegistration($id)
    {
        $event = Event::findOrFail($id);
        $volunteer = Auth::user()->volunteer;
        
        // Remove registration
        $volunteer->events()->detach($event->id);
        
        return redirect()->route('evenementen.index')->with('success', 'Je inschrijving is geannuleerd.');
    }

    /**
     * Show the form for proposing a new event.
     */
    public function showProposalForm()
    {
        return view('pages.activiteiten-voorstel');
    }

    /**
     * Store a newly proposed event.
     */
    public function submitProposal(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'titel' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'datum' => 'required|date|after:today',
            'start_tijd' => 'required|string',
            'eind_tijd' => 'required|string|after:start_tijd',
            'locatie' => 'required|string|max:255',
            'max_deelnemers' => 'nullable|integer|min:1',
            'beschrijving' => 'required|string',
            'naam' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telefoon' => 'nullable|string|max:20',
            'voorwaarden' => 'required|accepted',
        ]);

        // Create the event
        $event = Event::create([
            'titel' => $validated['titel'],
            'type' => $validated['type'],
            'datum' => $validated['datum'],
            'start_tijd' => $validated['start_tijd'],
            'eind_tijd' => $validated['eind_tijd'],
            'locatie' => $validated['locatie'],
            'max_deelnemers' => $validated['max_deelnemers'],
            'beschrijving' => $validated['beschrijving'],
            'contact_naam' => $validated['naam'],
            'contact_email' => $validated['email'],
            'contact_telefoon' => $validated['telefoon'],
            'status' => 'pending',
            'created_by' => Auth::id(),
        ]);

        // Send notification to admin
        // Mail::to(config('mail.admin_address'))->send(new EventProposal($event));

        // Redirect with success message
        return redirect()->route('activiteiten.voorstel.bedankt')->with('success', 'Je evenementvoorstel is succesvol ingediend.');
    }

    /**
     * Display the thank you page after event proposal.
     */
    public function proposalThankYou()
    {
        return view('pages.activiteiten-voorstel-bedankt');
    }

    /**
     * Display the specified event.
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        
        // Check if user is authorized to view this event
        if ($event->created_by != Auth::id() && !Auth::user()->isAdmin()) {
            abort(403);
        }
        
        return view('pages.evenementen-show', compact('event'));
    }
}
