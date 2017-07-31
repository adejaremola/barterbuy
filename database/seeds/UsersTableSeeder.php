<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('users')->truncate();
       $faker = Faker::create();
       foreach(range(1, 10) as $index)
       {
           User::create([
               'first_name' => $faker->firstname,
               'last_name' => $faker->lastname,
               'email' => $faker->email,
               'password' => $faker->password,
               'is_admin' => $faker->numberBetween(0, 1),
           ]);
		}

    }
}
