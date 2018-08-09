<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class RegistrationController extends Controller
{
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
        return redirect()->home();
    }

}
