<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventStatusUpdate;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        // Count statistics for dashboard
        $stats = [
            'volunteers' => Volunteer::count(),
            'events' => Event::count(),
            'pending_events' => Event::where('status', 'pending')->count(),
            'upcoming_events' => Event::where('datum', '>=', now())->count(),
        ];
        
        // Get recent volunteers
        $recentVolunteers = Volunteer::orderBy('created_at', 'desc')->take(5)->get();
        
        // Get pending events
        $pendingEvents = Event::where('status', 'pending')->orderBy('created_at', 'desc')->take(5)->get();
        
        return view('admin.dashboard', compact('stats', 'recentVolunteers', 'pendingEvents'));
    }

    /**
     * Display a listing of volunteers.
     */
    public function volunteers()
    {
        $volunteers = Volunteer::orderBy('naam')->paginate(20);
        return view('admin.volunteers.index', compact('volunteers'));
    }

    /**
     * Display the specified volunteer.
     */
    public function showVolunteer($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('admin.volunteers.show', compact('volunteer'));
    }

    /**
     * Search for volunteers based on city and range.
     */
    public function searchVolunteers(Request $request)
    {
        $request->validate([
            'stad' => 'required|string|max:255',
        ]);

        $city = $request->stad;
        
        // Find volunteers where the specified city is within their action radius
        // This is a simplified approach - in a real-world scenario, you would use
        // geocoding and distance calculations for more accurate results
        $volunteers = Volunteer::where(function($query) use ($city) {
            // Volunteers who live in the specified city
            $query->where('stad', 'like', '%' . $city . '%');
        })
        ->orWhere(function($query) use ($city) {
            // Volunteers whose action radius includes the specified city
            // This would require a more complex implementation with geocoding in a real application
            // For now, we'll use a simplified approach for demonstration purposes
            $query->where('actieradius', '>=', 25); // Assuming volunteers with larger radius might cover the city
        })
        ->orderBy('naam')
        ->paginate(20);
        
        return view('admin.volunteers.search-results', compact('volunteers', 'city'));
    }

    /**
     * Display a listing of events.
     */
    public function events()
    {
        $events = Event::orderBy('datum', 'desc')->paginate(20);
        return view('admin.events.index', compact('events'));
    }

    /**
     * Display the specified event.
     */
    public function showEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.show', compact('event'));
    }

    /**
     * Approve the specified event.
     */
    public function approveEvent($id)
    {
        $event = Event::findOrFail($id);
        $event->status = 'approved';
        $event->save();
        
        // Send notification to event creator
        if ($event->creator) {
            Mail::to($event->creator->email)->send(new EventStatusUpdate($event, 'approved'));
        }
        
        return redirect()->route('admin.evenementen.show', $event->id)
            ->with('success', 'Evenement is goedgekeurd.');
    }

    /**
     * Reject the specified event.
     */
    public function rejectEvent(Request $request, $id)
    {
        $request->validate([
            'rejection_reason' => 'required|string|max:1000',
        ]);
        
        $event = Event::findOrFail($id);
        $event->status = 'rejected';
        $event->rejection_reason = $request->rejection_reason;
        $event->save();
        
        // Send notification to event creator
        if ($event->creator) {
            Mail::to($event->creator->email)->send(new EventStatusUpdate($event, 'rejected'));
        }
        
        return redirect()->route('admin.evenementen.show', $event->id)
            ->with('success', 'Evenement is afgewezen.');
    }

    /**
     * Display a listing of pages.
     */
    public function pages()
    {
        $pages = Page::orderBy('title')->paginate(20);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new page.
     */
    public function createPage()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created page.
     */
    public function storePage(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages',
            'content' => 'required|string',
            'meta_description' => 'nullable|string|max:255',
            'published' => 'boolean',
        ]);
        
        $page = Page::create($validated);
        
        return redirect()->route('admin.paginas.edit', $page->id)
            ->with('success', 'Pagina is aangemaakt.');
    }

    /**
     * Show the form for editing the specified page.
     */
    public function editPage($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified page.
     */
    public function updatePage(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'content' => 'required|string',
            'meta_description' => 'nullable|string|max:255',
            'published' => 'boolean',
        ]);
        
        $page->update($validated);
        
        return redirect()->route('admin.paginas.edit', $page->id)
            ->with('success', 'Pagina is bijgewerkt.');
    }

    /**
     * Remove the specified page.
     */
    public function deletePage($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        
        return redirect()->route('admin.paginas')
            ->with('success', 'Pagina is verwijderd.');
    }
}
