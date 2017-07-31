<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Blog;
class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('blogs')->truncate();
       $faker = Faker::create();
       foreach(range(1, 10) as $index)
       {
           Blog::create([
               'user_id' => $faker->numberBetween(1, 10),
               'title' => $faker->word,
               'content' => $faker->text,
               'pic_url' => $faker->imageUrl($width = 640, $height = 480),
           ]);
       }
    }
}
