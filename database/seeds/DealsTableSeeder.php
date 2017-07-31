<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Deal;
use Faker\Factory as Faker;


class DealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('deals')->truncate();
       $faker = Faker::create();
       foreach(range(1, 10) as $index)
       {
           Deal::create([
               'user_id' => $faker->numberBetween(1, 10),
               'title' => $faker->word,
               'pic_url' => $faker->imageUrl($width = 640, $height = 480),
               'description' => $faker->text,
               'price' => $faker->randomFloat(2, 5, 100),
           ]);
       }
    }
}
