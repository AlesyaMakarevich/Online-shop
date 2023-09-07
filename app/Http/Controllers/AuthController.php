<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInFormRequest;

class AuthController
{
    public function getLoginPage()
    {

        return view('auth.login', [

        ]);
    }

    public function login(SignInFormRequest $request)
    {
        if(!auth()->attempt($request->validate())) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
        $request->session()->regenerate();

        return redirect()->intended(route('main'));


    }

    public function getRegisterPage()
    {
        return view('auth.register', [

        ]);
    }

}
