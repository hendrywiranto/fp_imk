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
        $kelas->class_name = 'Keamanan Informasi Jaringan E';
        $kelas->class_shortname = 'KIJ E';
        $kelas->class_lecturer = 'Tohari Ahmad';
        $kelas->class_pic = 'https://blog.pucc.or.id/apa-sih-keamanan-jaringan-itu/';
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
        $kelas->class_name = 'Interaksi Manusia Komputer B';
        $kelas->class_shortname = 'IMK B';
        $kelas->class_lecturer = 'Anny Yuliarty';
        $kelas->class_pic = 'https://jino2016.wordpress.com/2016/01/17/pendahuluan-imk/';
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

        $kelas = new Kelas;
        $kelas->class_name = 'Rekayasa Kebutuhan B';
        $kelas->class_shortname = 'RK B';
        $kelas->class_lecturer = 'Nurul Fajrin';
        $kelas->class_pic = 'http://dinysys.blogspot.com/2017/03/rekayasa-kebutuhan-perangkat-lunak.html';
        $kelas->class_prologue = 'Prologue RK B';
        $kelas->save();

        $time1 = Carbon\Carbon::create(2018, 1, 31, 7);
        for($i=1;$i<17;$i++){
            $pertemuan = new Pertemuan;
            $pertemuan->urut = $i;
            $pertemuan->datetime = $time1->addWeeks(1);
            $pertemuan->batal = 0;
            $kelas->pertemuan()->save($pertemuan);
        }

        $kelas = new Kelas;
        $kelas->class_name = 'Data Mining A';
        $kelas->class_shortname = 'DM E';
        $kelas->class_lecturer = 'Chastine Fatichah';
        $kelas->class_pic = 'https://www.lynda.com/SPSS-tutorials/Essential-Elements-Predictive-Analytics-Data-Mining/578072-2.html';
        $kelas->class_prologue = 'Prologue Data Mining A';
        $kelas->save();

        $time1 = Carbon\Carbon::create(2018, 1, 31, 15);
        for($i=1;$i<17;$i++){
            $pertemuan = new Pertemuan;
            $pertemuan->urut = $i;
            $pertemuan->datetime = $time1->addWeeks(1);
            $pertemuan->batal = 0;
            $kelas->pertemuan()->save($pertemuan);
        }
    }
}
