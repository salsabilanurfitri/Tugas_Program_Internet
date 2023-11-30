<?php

namespace Database\Seeders;

use illuminate\Database\Console\Seeds\WithoutMode1Events;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['name'=>'Salsabila','id_course'=>21,'age'=>21,'classroom'=>'Kelas A'],
            ['name'=>'Nurfitri','id_course'=>21,'age'=>20,'classroom'=>'Kelas B'],
            ['name'=>'Larasati','id_course'=>21,'age'=>21,'classroom'=>'Kelas C'],
            ['name'=>'Putri','id_course'=>21,'age'=>18,'classroom'=>'Kelas D'],
            ['name'=>'Angeliani','id_course'=>21,'age'=>19,'classroom'=>'Kelas E']
        ]);
    }
}
