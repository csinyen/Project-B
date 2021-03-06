<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function index() {
		return 'hello world';
	}
	public function login() {
	return view('frontend.login');
	}
	
		public function register() {
	return view('frontend.register');
	}
	public function registerPost(request $request) {
	$request->validate([
	'name' => 'required' ,
	'email' => 'required|email|unique:users' ,
	'ic' => 'required|unique:users',
	'password' => 'required'
	], [
	'registername.required' => 'Sila masukkan nama',
	'email.email' => 'Email tidak sah',
	'email.unique' => 'Email sudah wujud'
	]);
	$user = new User();
	$user->name = $request->name;
	$user->email = $request->email;
	$user->ic = $request->ic;
	$user->password = bcrypt($request->password);
	$user->save();


	return back()->with('success','successfully register');
	}
}
