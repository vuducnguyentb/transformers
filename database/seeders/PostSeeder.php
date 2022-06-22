<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('posts')->insert(
                [
                    'user_id' => $this->faker->numberBetween(1, 4),
                    'title' =>  $this->faker->numerify('title-######'),
                    'contents' => 'content'.$i
                ]
            );
        }
    }
}
