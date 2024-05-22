<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();

        for($i = 1; $i<= 6; $i++)
        {
            $image = "Post_Image_".rand(1,5).".jpg";
            $date = date("Y-m-d H:i:s", strtotime("2021-04-20 10:00:00 + {$i} days"));
            $posts[] = [
                'author_id' =>rand(1,3),
                'title' => $faker->sentence(rand(10, 15)),
                'slug'=> $faker->slug(),
                'excerpt'=> $faker->text(rand(200, 300)),
                'body' => $faker->paragraph(rand(8, 12), true),
                'image'=> rand(0,1) == 1 ? $image : NULL,
            ];
        }
        \DB::table('posts')->insert($posts);
    }
}
