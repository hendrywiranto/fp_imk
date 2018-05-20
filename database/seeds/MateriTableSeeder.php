<?php

use Illuminate\Database\Seeder;
use App\Pertemuan;
use App\Materi;

class MateriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materi = new Materi;
        $materi->name = 'Excel';
        $materi->path = '/uploads/1526841825.xlsx';
        $materi->type = '1';
        
        $pertemuan = Pertemuan::find(1);
        $pertemuan->materi()->save($materi);

    }
}
