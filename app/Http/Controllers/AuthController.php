<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(Request $request)
    {


        $fields = $request->validate([
            'avatar' => ['file', 'nullable', 'max:1080'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($request->hasFile('avatar')) {
            $fields["avatar"] = Storage::disk('public')->put("avatars", $request->avatar);
        }

        $user = User::create($fields);
        Auth::login($user);
        return redirect()->route('home');

    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (Auth::attempt($fields)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->withInput();

    }
}
