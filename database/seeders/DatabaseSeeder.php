<?php

namespace Database\Seeders;

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
       $this->call([
        PostTableSeeder::class,
        StaffBranchSeeder::class,
        StaffSeeder::class,
        BranchSeeder::class,
       ]);
    }
}
