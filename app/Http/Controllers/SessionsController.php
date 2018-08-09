<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


/**
 * Where to redirect users after login.
 *
 * @var string
 */


class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest' , ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        // Attempt to authenticate the user

//        $this->validate(request(), [
//            'email' => 'required',
//            'password' => 'required'
//        ]);
        if (! Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->withErrors([
                'message' => 'please check your credentials and try again.'
            ]);
        }

        // If not, redirect back.

        // If so, sign them in.
        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
