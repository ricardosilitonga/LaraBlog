<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the posts table
        DB::table('posts')->truncate();

        $posts = [];
        $faker = Factory::create();
        $date = Carbon::create(2022, 11, 12, 9);

        // generate 10 dummy posts
        for ($i=1; $i<=10; $i++) {

            $image = 'Post_Image_' . rand(1, 5) . '.jpg';
//            $date = date('Y-m-d H:i:s', strtotime("2022-11-14 22:59:00 + {$i} days"));
            $date = $date->addDays(1);
            $publishedDate = clone($date);

            $posts[] = [
                'author_id' => rand(1, 3),
                'title' => $faker->sentence(rand(8, 12)),
                'slug'  => $faker->slug(),
                'excerpt'  => $faker->text(rand(250,300)),
                'body'  => $faker->paragraphs(rand(10,15), true),
                'image' => rand(0, 1) == 1 ? $image : NULL,
                'created_at'    => clone $date,
                'updated_at'    => clone $date,
                'published_at'  => $i < 5 ? $publishedDate : (rand(0,1) == 0 ? NULL : $publishedDate->addDays(4))
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
