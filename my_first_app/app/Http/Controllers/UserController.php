<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        

        $incomingData['password'] = bcrypt($incomingData['password']);
        User::create($incomingData);




        return view('sagiri', compact('incomingData'));
    }
}
