<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
        $settings = cache()->remember('settings', now()->addDay(), function () {
            return Setting::first();
        });
        $user = auth()->user();
        return view('dashboard.settings')->with(['settings' => $settings, 'user' => $user]);
    }

    public function update(Request $request)
    {
        $settings = Setting::first();
        $user = User::first();
        // Update setting fields
        $settings->update($request->all());
        // Update user fields
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        cache()->forget('settings');
        return to_route('settings')->with('success', "Settings updated successfully.");
    }

    public function password(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'same:password'],
        ]);

        $user = User::first();
        if (Hash::check($request['current_password'], $user->password)) {
            // Update user password
            $user->update(['password' => Hash::make($request->password)]);
            return back()->withFragment('password')
                ->with('password_success', 'Password changed successfully.');
        } else {
            // Redirect back with error
            return back()->withFragment('password')
                ->with('password_error', 'The current password you entered is incorrect.');
        }
    }
}
