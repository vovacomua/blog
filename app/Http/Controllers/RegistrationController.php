<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\RegistrationRequest;

use App\Mail\Welcome;

class RegistrationController extends Controller

{

    public function create()

    {

        return view('registration.create');

    }

    public function store(RegistrationRequest $request)

    {

        // Create and save the user
        $user = User::create([ 
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        // Sign them in
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        // Redirect to the home page
        return redirect()->home();
        
    }

}