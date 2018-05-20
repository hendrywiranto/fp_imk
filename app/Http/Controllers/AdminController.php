<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Pertemuan;

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
        $kelas->class_place = $request->input('place');
        $kelas->class_prologue = $request->input('prologue');
        if ($request->file('input_img')){
            $img = time() . "." . $request->file('input_img')->getClientOriginalExtension();
            $request->file('input_img')->move(base_path() . '/public/img/showcase/', $img);
            $photopath = "/img/showcase/" . $img;
	    	$kelas->class_pic = $photopath;
        }
        $kelas->save();
        return redirect()->route('home');
	}

	public function batalPertemuan($id){
		$pertemuan = Pertemuan::find($id);
		$pertemuan->batal=1;
		$pertemuan->save();
		return redirect()->route('admin.detail', ['id' => $pertemuan->kelas_id]);
	}

	public function hadirPertemuan($id){
		$pertemuan = Pertemuan::find($id);
		$pertemuan->batal=0;
		$pertemuan->save();
		return redirect()->route('admin.detail', ['id' => $pertemuan->kelas_id]);
	}

	public function infoPertemuan(Request $request, $id){
		$pertemuan = Pertemuan::find($id);
		$pertemuan->keterangan=$request->input('info');
		$pertemuan->save();
		return redirect()->route('admin.detail', ['id' => $pertemuan->kelas_id]);
	}
}