<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'username'=>'Agus Sududung',
               'password'=> bcrypt('123456'),
               'is_teacher'=>'1',
            ],
            [
                'username'=>'admin',
                'password'=> bcrypt('admin'),
                'is_teacher'=>'1',
             ],
            [
               'username'=>'Alpin',
               'password'=> bcrypt('123456'),
               'is_teacher'=>'0',
            ],
            [
                'username'=>'murid',
                'password'=> bcrypt('murid'),
                'is_teacher'=>'0',
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}