<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create(
            [
                'username' => 'Superadmin',
                'name' => 'Super Admin',
                'email'  => 'superadmin',
                'password' => bcrypt('muh4mmad12uhiyat')
            ]
            );
    }
}
