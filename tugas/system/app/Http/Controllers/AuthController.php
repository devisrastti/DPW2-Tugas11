<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller 
{
    function showLogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('dashboard')->with('success', 'Login Anda Berhasil');
		}else{
			return back()->with('danger', 'Login Anda Gagal, Silahkan Cek Kembali Email dan Password Anda');
		}
		dd(request()->all());
	}

	function logout(){
		Auth::logout();
		return redirect('dashboard');
	}

	function showRegistrasi(){
		return view ('registrasi');

	}

	function forgotPassword(){
		
	}

}