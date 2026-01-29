<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $dataFromHome)
    {
        $incomingData = $dataFromHome->validate(
            [
                'username' => 'required|min:4|max:20',
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ]

            
        );
        return view('sagiri', compact('incomingData'));
    }
}
