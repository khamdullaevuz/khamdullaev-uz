<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('backend.profile.index');
    }

    public function update()
    {
        return view('backend.profile.update');
    }

    public function store(Request $request)
    {
        $value = $request->validate([
            'old_password' => ['required', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $user = auth()->user();
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect']);
        }

        if ($request->has('password')) {
            $user->password = Hash::make($value['password']);
        }
        $user->save();
        Auth::logout();
        return redirect()->route('login')->with('success', 'Your password has been changed successfully. Please login again.');
    }
}
