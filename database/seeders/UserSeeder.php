<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'nguyenkye',
                    'email' => 'nguyenkye@gmail.com',
                    'address' => 'TB',
                    'password' => '123456',
                ],
                [
                    'name' => 'test1',
                    'email' => 'test1@gmail.com',
                    'address' => 'TB',
                    'password' => '123456',
                ],
                [
                    'name' => 'test2',
                    'email' => 'test2@gmail.com',
                    'address' => 'TB',
                    'password' => '123456',
                ],
                [
                    'name' => 'test3',
                    'email' => 'test3@gmail.com',
                    'address' => 'TB',
                    'password' => '123456',
                ]
            ]
        );
    }
}
