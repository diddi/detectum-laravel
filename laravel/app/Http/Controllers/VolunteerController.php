<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\VolunteerRegistration;

class VolunteerController extends Controller
{
    /**
     * Display the volunteer registration form.
     */
    public function showRegistrationForm()
    {
        return view('pages.voor-vrijwilligers');
    }

    /**
     * Handle a volunteer registration request.
     */
    public function register(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'voornaam' => 'required|string|max:255',
            'naam' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
            'stad' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:volunteers',
            'telefoon' => 'required|string|max:20',
            'actieradius' => 'required|integer|min:1|max:500',
            'ervaring' => 'nullable|string|max:255',
            'interesses' => 'nullable|string',
            'privacy_akkoord' => 'required|accepted',
        ]);

        // Create the volunteer record
        $volunteer = Volunteer::create([
            'voornaam' => $validated['voornaam'],
            'naam' => $validated['naam'],
            'adres' => $validated['adres'],
            'postcode' => $validated['postcode'],
            'stad' => $validated['stad'],
            'email' => $validated['email'],
            'telefoon' => $validated['telefoon'],
            'actieradius' => $validated['actieradius'],
            'ervaring' => $validated['ervaring'] ?? null,
            'interesses' => $validated['interesses'] ?? null,
            'user_id' => Auth::id(),
        ]);

        // Send confirmation email to volunteer
        Mail::to($volunteer->email)->send(new VolunteerRegistration($volunteer));

        // Send notification to admin
        Mail::to(config('mail.admin_address'))->send(new VolunteerRegistration($volunteer, true));

        // Redirect with success message
        return redirect()->route('vrijwilligers.bedankt')->with('success', 'Bedankt voor je registratie als vrijwilliger!');
    }

    /**
     * Display the thank you page after registration.
     */
    public function thankYou()
    {
        return view('pages.vrijwilligers-bedankt');
    }

    /**
     * Display the volunteer's profile.
     */
    public function profile()
    {
        $volunteer = Auth::user()->volunteer;
        return view('pages.vrijwilligers-profiel', compact('volunteer'));
    }

    /**
     * Show the form for editing the volunteer's profile.
     */
    public function edit()
    {
        $volunteer = Auth::user()->volunteer;
        return view('pages.vrijwilligers-edit', compact('volunteer'));
    }

    /**
     * Update the volunteer's profile.
     */
    public function update(Request $request)
    {
        $volunteer = Auth::user()->volunteer;

        // Validate the request data
        $validated = $request->validate([
            'voornaam' => 'required|string|max:255',
            'naam' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
            'stad' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:volunteers,email,' . $volunteer->id,
            'telefoon' => 'required|string|max:20',
            'actieradius' => 'required|integer|min:1|max:500',
            'ervaring' => 'nullable|string|max:255',
            'interesses' => 'nullable|string',
        ]);

        // Update the volunteer record
        $volunteer->update($validated);

        // Redirect with success message
        return redirect()->route('vrijwilligers.profiel')->with('success', 'Je profiel is bijgewerkt!');
    }
}
