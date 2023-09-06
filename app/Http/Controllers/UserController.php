<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Auth::user()->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);


        if ($request->hasFile('profile_photo')) {

            $profilePhoto = $request->file('profile_photo');
            $path = $profilePhoto->store('profiles');

            Auth::user()->update(['image' => $path]);
        }

        return redirect('/profile')->with('success', 'Perfil atualizado com sucesso.');
    }

}
