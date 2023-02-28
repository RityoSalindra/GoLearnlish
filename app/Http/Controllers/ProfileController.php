<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // public function profile()
    // {
    //     return view('profile');
    // }

    public function profile()
    {
        $profile = User::select('*')
            ->get();
        return view('profile', ['profile' => $profile]);
    }

    public function edit($id)
    {
        $profile = User::select('*')
            ->where('id', $id)
            ->get();

        return view('editprofile', ['profile' => $profile]);
    }

    public function updateprofile(Request $request)
    {
        $profile = User::where('username', $request->username)
            ->update([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'email' => $request->email,
                'nohp' => $request->nohp,
            ]);

        return redirect()->route('profile');
    }
}
