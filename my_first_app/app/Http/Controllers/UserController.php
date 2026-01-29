<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $dataFromHome)
    {
        $incomingData = $dataFromHome->validate(
            [
                'username' => 'required|min:4|max:20|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20|confirmed',
            ]



            
        );
        

        $incomingData['password'] = bcrypt($incomingData['password']);
        $user = User::create($incomingData);
        Auth::login($user);
        return redirect('/');

        return view('sagiri', compact('incomingData'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
