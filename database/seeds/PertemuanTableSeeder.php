<?php

use Illuminate\Database\Seeder;
use App\Kelas;
use App\Pertemuan;
use App\User;

class PertemuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all();

        $kelas = new Kelas;
        $kelas->class_name = 'KIJ E';
        $kelas->class_prologue = 'Prologue KIJ E';
        $kelas->save();

        $user[0]->kelas()->save($kelas);
        $user[1]->kelas()->save($kelas);
        $user[3]->kelas()->save($kelas);

        $time1 = Carbon\Carbon::create(2018, 1, 31, 10);
        for($i=1;$i<17;$i++){
            $pertemuan = new Pertemuan;
            $pertemuan->urut = $i;
            $pertemuan->datetime = $time1->addWeeks(1);
            $pertemuan->batal = 0;
            $kelas->pertemuan()->save($pertemuan);
        }


        $kelas = new Kelas;
        $kelas->class_name = 'IMK B';
        $kelas->class_prologue = 'Prologue IMK B';
        $kelas->save();

        $user[0]->kelas()->save($kelas);

        $time1 = Carbon\Carbon::create(2018, 1, 31, 13);
        for($i=1;$i<17;$i++){
            $pertemuan = new Pertemuan;
            $pertemuan->urut = $i;
            $pertemuan->datetime = $time1->addWeeks(1);
            $pertemuan->batal = 0;
            $kelas->pertemuan()->save($pertemuan);
        }
    }
}
