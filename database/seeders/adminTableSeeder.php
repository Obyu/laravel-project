<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugas')->insert([
            [
            'nama_petugas'=>'bayu',
            'username'=>'admin',
            'password'=>Hash::make('123'),
            'telp'=>'082122313456',
            'level'=>'admin'
            ],
        ]);
    }
}
