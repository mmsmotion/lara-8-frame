<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function changePassword(){
        return view('profile.change-password');
    }

    public function updatePassword(Request $request){


        $request->validate([
            "current_password" => ['required', new MatchOldPassword()],
            "password" => 'required',
            "password_confirmation" => 'required|same:password'
        ]);

        $currentUser = User::find(Auth::id());
        $currentUser->password = Hash::make($request->password);
        $currentUser->update();
        Auth::logout();
        return redirect()->route('login');

    }
}
