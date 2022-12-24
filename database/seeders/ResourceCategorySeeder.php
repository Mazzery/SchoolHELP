<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resource_data')->insert([
            'resource_type' => 'Mobile Device',
        ]);

        DB::table('resource_data')->insert([
            'resource_type' => 'Personal Computer',
        ]);
        DB::table('resource_data')->insert([
            'resource_type' => 'Networking Equipment',
        ]);
    }
}