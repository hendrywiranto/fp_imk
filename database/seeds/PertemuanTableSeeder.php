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
        $kelas->class_pic = 'https://blog.pucc.or.id/wp-content/uploads/2017/12/network-security_MCG.jpg';
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
        $kelas->class_pic = 'https://jino2016.files.wordpress.com/2016/01/imk.jpg';
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
        $kelas->class_pic = 'https://4.bp.blogspot.com/-dDjwQQSh5AE/WL6xa1dLGII/AAAAAAAAFFA/uapKxaCv_kItlRF7O2rN8aEkG383LCAbgCEw/s320/498500152703f9dbd8be264291664ab4.jpg';
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
        $kelas->class_pic = 'https://cdn.lynda.com/course/578072/578072-636342597357960762-16x9.jpg';
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
