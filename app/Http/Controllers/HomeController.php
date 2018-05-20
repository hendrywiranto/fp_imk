<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Kelas;

class HomeController extends Controller
{
    public function notification(){
        $user_details = User::where('email', session('user.email'))->get();
        Session::put('user', $user_details[0]);
        $datenow = \Carbon\Carbon::now(7);
        $pert = array();
        foreach(session('user')->kelas as $kelas){
            foreach($kelas->pertemuan as $pertemuan){
                $diff = $datenow->diffInDays($pertemuan->datetime);  
                if($diff<7 && !$datenow->gt($pertemuan->datetime)){
                    $pert[] = $pertemuan;
                }
            }
        }
        Session::put('pert', $pert);
    }
    public function index(){
        $this->notification();
        if(session('user.role')=='dosen'){
            $kelas = Kelas::all();
            return view('welcome', ['kelas'=>$kelas]);
        }
        else {
            return view('welcome');
        }
    }

    public function showLogin(){
    	return view('auth.login');
    }

    public function login(Request $request){
		$user_details = User::where('email', $request->input('email'))->get();
        if ($user_details[0]->password==md5($request->input('password'))) {
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
