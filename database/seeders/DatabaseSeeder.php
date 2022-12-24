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
            'name' => 'jeremy',
            'role' => 'volunteer',
            'username' => 'jer',
            'email' => 'jeremy@gmail.com',
            'password' => bcrypt('123123123'),

        ]);

        \App\Models\User::factory()->create([
            'name' => 'I Made Arya Wiguna',
            'phone_number' => '081333555888',
            'occupation' => 'Principal',
            'role' => 'school_help_admin',
            'username' => 'helpadmin',
            'email' => 'helpadminaccount@gmail.com',
            'password' => bcrypt('1234512345'),
            'position' => 'administrator'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Hendry Suryadi Arya',
            'phone_number' => '081333444555',
            'occupation' => 'Teacher',
            'role' => 'school_admin',
            'username' => 'schooladmin',
            'email' => 'schooladminaccount@gmail.com',
            'password' => bcrypt('1234512345'),
            'position' => 'schooladministrator'
        ]);

        $this->call(ResourceCategorySeeder::class);
        
    }
}
