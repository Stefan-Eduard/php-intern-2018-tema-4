<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|confirmed' // to verify with password_confirmation
        ]);
        // dd(request(['email'])['email']);
        //$user = \App\User::find('email', '=', request(['email'])['email']);
        // $user = \App\User::find('email', request(['email']));
        $email = request(['email'])['email'];
        $user = \App\User::whereEmail($email)->first();
        auth()->login($user);

        return redirect('/dashboard');

        /*
        // Attempt to authenticate the user

        if (! auth()->attempt(request(['email', 'password']))) 
        {
            // if not, redirect back !!!
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }
       
        // if so, sign them in -- done automatically by the attempt helper function
        
        // redirect to the home page
        return redirect('/dashboard');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
