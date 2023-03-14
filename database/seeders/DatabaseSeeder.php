<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create(
            [
                'username' => 'mruhiyat12',
                'name' => 'Muhammad Ruhiyat',
                'email'  => 'muhammadruhiyat02098@gmail.com',
                'password' => bcrypt('muh4mmad12uhiyat')
            ]
            );
    }
}
