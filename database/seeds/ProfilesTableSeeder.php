<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $count = count($users);
        $faker = Faker::create();
    	foreach (range(1,$count) as $index) {
	        DB::table('profiles')->insert([
	            'user_id' => $faker->unique()->numberBetween(1, 10),
	            'city' => $faker->city,
	            'state' => $faker->state,
	            'phone' => $faker->phoneNumber,
	            'address' => $faker->address,
	            'pic_url' => $faker->imageUrl($width = 200, $height = 200),
                'updated_at' => \Carbon\Carbon::now(),
                'created_at' => \Carbon\Carbon::now(),     
	        ]);
        }
    }
}
