<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710169',
            'name' => 'MUHAMMAD AZRIEAL RHAMDAN',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '081907961152',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710137',
            'name' => 'MUHAMMAD ROOFIIF WAHYU PRATAMA',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '085762871739',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710106',
            'name' => 'MUHAMMAD ZAKI',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '081983762249',
        ]);
    }
}