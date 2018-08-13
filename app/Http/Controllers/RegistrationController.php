<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(){
        return view('registration.create');
    }
    public function store(){
        //validate the form
        $this->validate(request(), [
             'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed'
        ]);
        
        // Create and save the user

        $user = User::create([
            'name' => \request('name'),
            'email' => \request('email'),
            'password' => bcrypt(\request('password'))
        ]);

        //Sign them in
        auth()->login($user);
        //Redirect to the home page

        \Mail::to($user)->send(new Welcome($user));


        return redirect()->home();
    }

}
