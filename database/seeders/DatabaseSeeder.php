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
            'name' => 'hendry',
            'role' => 2,
            'username' => 'hen',
            'email' => 'school@gmail.com',
            'password' => bcrypt('123123123'),

        ]);
        
    }
}
