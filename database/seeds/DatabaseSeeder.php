<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(ProfilesTableSeeder::class);
        // $this->call(DealsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
    }
}