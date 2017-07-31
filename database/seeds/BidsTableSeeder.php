<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Bid;
class BidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('bids')->truncate();
       $faker = Faker::create();
       foreach(range(1, 10) as $index)
       {
           Bid::create([
               'user_id' => $faker->randomElement($users),
               'deal_id' => $faker->randomElement($deals),
               'price' => $faker->numberBetween(2, 5, 100),
               'accepted' => $faker->numberBetween(0, 1),
           ]);
       }
    }
}
