<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Kelas;

class HomeController extends Controller
{
    public function index(){
        $user_details = User::where('email', session('user.email'))->get();
        Session::put('user', $user_details[0]);
        if(session('user.role')=='dosen'){
            $kelas = Kelas::all();
            return view('welcome', ['kelas'=>$kelas]);
        }
        else {
            return view('welcome');
        }
    }

    public function showLogin(){
    	return view('login');
    }

    public function login(Request $request){
		$user_details = User::where('email', $request->input('email'))->get();
		if ($user_details[0]->password=bcrypt($request->input('password')) && $user_details[0]->role=='dosen') {
            Session::put('user', $user_details[0]);
            return redirect()->route('home');
		}
        else if ($user_details[0]->password=bcrypt($request->input('password'))) {
            Session::put('user', $user_details[0]);
            return redirect()->route('home');
        }
		else{
			return 'not entered ';
		}
    }

    public function logout(){
        Session::flush();
        return redirect()->route('login');
    }
}
