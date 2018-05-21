<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Kelas;
use App\User;

class ClassController extends Controller
{
    public function detail($id){
    	$kelas = Kelas::where('id', $id)->get();
        app('App\Http\Controllers\HomeController')->notification();
        $datenow = \Carbon\Carbon::now(7);
        foreach($kelas[0]->pertemuan as $pertemuan){
            $diff = $datenow->diffInDays($pertemuan->datetime);  
            if($diff<7 && !$datenow->gt($pertemuan->datetime)){
                $pert = $pertemuan;
                break;
            }
        }
    	return view('class', ['kelas'=>$kelas[0], 'pert'=>$pert]);
    }

    public function showSubClass(){
    	$id = array();
    	foreach (session('user')->kelas as $kelas) {
    		$id[] = $kelas->id;	
    	}
    	$kelas = Kelas::whereNotIn('id', $id)->get();
	    return view('subclass', ['kelas'=>$kelas]);
    }

    public function subClass($id){
    	$kelas = Kelas::where('id', $id)->get();
    	session('user')->kelas()->save($kelas[0]);
        Session::flash('message.1', 'Success!'); 
        Session::flash('message.2', 'Enroll class success'); 
    	return redirect()->route('home');
    }
}
