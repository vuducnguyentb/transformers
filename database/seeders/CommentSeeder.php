<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            DB::table('comments')->insert(
                [
                    'post_id'=>$this->faker->numberBetween(1, 10),
                    'user_id' => $this->faker->numberBetween(1, 4),
                    'contents' => 'comment'.$i
                ]
            );
        }
    }
}
