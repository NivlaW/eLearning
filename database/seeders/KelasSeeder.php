<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
            'nama' => 'CompTIA Linux+'
            ],
            [
            'nama' => 'Front End Web Development'
            ],

        ];

        foreach ($kelas as $key => $value) {
            DB::table('kelas')->insert($value);
        }
    }
}