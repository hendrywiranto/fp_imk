<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Hendry Wiranto',
            'nrp' => '0511540000102',
            'email' => 'hendrywiranto24@gmail.com',
            'password' => md5('siswa'),
            'role' => 'siswa',
        ]);
        DB::table('users')->insert([
            'name' => 'Josh',
            'nrp' => '0511540000172',
            'email' => 'josh@gmail.com',
            'password' => md5('siswa'),
            'role' => 'siswa',
        ]);
        DB::table('users')->insert([
            'name' => 'Reinhart',
            'nrp' => '0511540000132',
            'email' => 'reinhart@gmail.com',
            'password' => md5('siswa'),
            'role' => 'siswa',
        ]);
        DB::table('users')->insert([
            'name' => 'Chasni',
            'nrp' => '0511540000175',
            'email' => 'chasni@gmail.com',
            'password' => md5('siswa'),
            'role' => 'siswa',
        ]);
        DB::table('users')->insert([
            'name' => 'Anny Y',
            'nrp' => '5115',
            'email' => 'annyyuliarti@gmail.com',
            'password' => md5('dosen'),
            'role' => 'dosen',
        ]);
    }
}
