<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function register()
    {
    	return view('users.register');
    }

    public function create(Request $req)
    {
    	$data = $req->validate([
    		'name' => 'required',
    		'email' => ['required', 'email' /*Rule::unique('user', 'email')*/],
    		'password' => ['required', 'confirmed']
    	]);
    	$data['password'] = bcrypt($data['password']);

    	User::create($data);
    	return redirect('/login')->with('message', 'User created successfully');
    }

    public function login()
    {
    	return view('users.login');
    }

    public function access(Request $req)
    {
    	$user = $req->validate([
    		'email' => 'required',
    		'password' => 'required'
    	]);


    	if(auth()->attempt($user))
    	{
    		$req->session()->regenerate();

    		return redirect('/');
    	}
    	else
    	{
    		return back();
    	}
    }

    public function logout(Request $req)
    {
    	auth()->logout();

    	$req->session()->invalidate();
    	$req->session()->regenerate();

    	return redirect('/login')->with('message', 'Logout success');

    }
}
