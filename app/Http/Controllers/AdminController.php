<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Kelas;
use App\Pertemuan;
use App\Materi;

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
		Session::flash('message.1', 'Success!'); 
		Session::flash('message.2', 'Class changed to canceled'); 
		return redirect()->route('admin.detail', ['id' => $pertemuan->kelas_id]);
	}

	public function hadirPertemuan($id){
		$pertemuan = Pertemuan::find($id);
		$pertemuan->batal=0;
		$pertemuan->save(); 
		Session::flash('message.1', 'Success!'); 
		Session::flash('message.2', 'Class changed to avaliable'); 
		return redirect()->route('admin.detail', ['id' => $pertemuan->kelas_id]);
	}

	public function infoPertemuan(Request $request, $id){
		$pertemuan = Pertemuan::find($id);
		$pertemuan->keterangan=$request->input('info');
		$pertemuan->save();
		Session::flash('message.1', 'Success!'); 
		Session::flash('message.2', 'Add information success'); 
		return redirect()->route('admin.detail', ['id' => $pertemuan->kelas_id]);
	}

	public function deleteInfoPertemuan(Request $request, $id){
		$pertemuan = Pertemuan::find($id);
		$pertemuan->keterangan=NULL;
		$pertemuan->save();
		Session::flash('message.1', 'Success!'); 
		Session::flash('message.2', 'Delete information success'); 
		return redirect()->route('admin.detail', ['id' => $pertemuan->kelas_id]);
	}

	public function showUploadFile(Request $request){
	    $file = $request->file('fileToUpload');
	    //Move Uploaded File
	    $destinationPath = '/public/uploads/';
	    $name = time() . "." . $request->file('fileToUpload')->getClientOriginalExtension();
	    $file->move(base_path() . $destinationPath, $name);

	    $destinationPath = '/uploads/';
	    $materi = new Materi;
	    $materi->name = $request->input('name');
	    $materi->path = $destinationPath . $name;
	    $materi->type = '1';
	    $pertemuan = Pertemuan::find($request->input('pertemuan_id'));
	    $pertemuan->materi()->save($materi);
		Session::flash('message.1', 'Success!'); 
		Session::flash('message.2', 'Add material success'); 
      	return redirect()->route('admin.detail', ['id'=>$request->input('class_id')]);
   }
}