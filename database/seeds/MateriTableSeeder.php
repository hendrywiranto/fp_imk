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
        $materi->name = 'Usability';
        $materi->path = '/uploads/1526843435.pdf';
        $materi->type = '1';
        
        $pertemuan = Pertemuan::find(1);
        $pertemuan->materi()->save($materi);
    }
}
