<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$XsrlnyglZfIr1Q7RgjFWw.DVryj0MTmHzus.stf2rNmCVt27607Aa',
            'remember_token' => null,
            'created_at'     => '2019-06-18 04:52:19',
            'updated_at'     => '2019-06-18 04:52:19',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
