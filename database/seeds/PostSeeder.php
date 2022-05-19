<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;

class PostSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(FakerGenerator $faker)
   {
      $faker = FakerFactory::create('it_IT');

      for ($i=0; $i<500; $i++) {

         $title = $faker->words(rand(1,4), true);

         Post::create([
            'title' => $title,
            'content' => $faker->paragraphs(rand(2,6)),
            'author' => $faker->words(2,2),
            'date' => $faker->date(),
            'slug' => Post::genSlug($title)
         ]);
      }

   }
}
