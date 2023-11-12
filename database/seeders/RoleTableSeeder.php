<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Menambahkan data peran 'admin'
        DB::table('role')->insert([
            'nama_role' => 'admin',
        ]);

        // Menambahkan data peran 'customer'
        DB::table('role')->insert([
            'nama_role' => 'customer',
        ]);
    }
}
