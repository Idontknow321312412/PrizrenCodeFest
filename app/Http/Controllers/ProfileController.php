<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Restaurant; // Update the model reference
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class ProfileController extends Controller
{


    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'operating_cities' => 'required|array',
            'phone_nr' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            // Add other rules as needed
        ]);

        $user = $request->user();

        // Assign each field manually
        $user->name = $request->input('name');
        $user->owner = $request->input('owner');
        $user->operating_cities = $request->input('operating_cities');
        $user->phone_nr = $request->input('phone_nr');
        $user->email = $request->input('email');

        // Add other fields as needed

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
