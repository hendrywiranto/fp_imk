<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class AdminController extends Controller
{
	public function detailKelas($id){
		$kelas = Kelas::find($id);
		return view('admin.classdetail', ['kelas'=>$kelas]);
	}

	public function showAddKelas(){
		return view('admin.addclass');
	}

	public function addKelas(Request $request){        
		$kelas = new Kelas;
        $kelas->class_name = $request->input('name');
        $kelas->class_shortname = $request->input('shortname');
        $kelas->class_lecturer = $request->input('lecturer');
        $kelas->class_pic = $request->input('pic');
        $kelas->class_prologue = $request->input('prologue');
        $kelas->save();
        return redirect()->route('home');
	}
}