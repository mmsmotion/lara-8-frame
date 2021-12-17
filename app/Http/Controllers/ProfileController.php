<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function changePassword(){
        return view('profile.change-password');
    }
}
