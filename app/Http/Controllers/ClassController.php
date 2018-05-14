<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\User;

class ClassController extends Controller
{
    public function detail($id){
    	$kelas = Kelas::where('id', $id)->get();
    	return view('class', ['kelas'=>$kelas[0]]);
    }

    public function showAddClass(){
    	$id = array();
    	foreach (session('user')->kelas as $kelas) {
    		$id[] = $kelas->id;	
    	}
    	$kelas = Kelas::whereNotIn('id', $id)->get();
	    return view('addclass', ['kelas'=>$kelas]);
    }

    public function addClass($id){
    	$kelas = Kelas::where('id', $id)->get();
    	//dd($kelas);
    	session('user')->kelas()->save($kelas[0]);
    	return redirect()->route('home');
    }
}