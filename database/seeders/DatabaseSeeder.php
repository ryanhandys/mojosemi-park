<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'mojosemiadmin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' =>'admin'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'anggita@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
