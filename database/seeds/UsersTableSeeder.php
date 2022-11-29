<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // reset the users table
        DB::table('users')->truncate();

        $faker = Factory::create();

        // generate 3 users/authors
        DB::table('users')->insert(
            [
                [
                    'name' => 'JaneDoe',
                    'slug'  => 'jane-doe',
                    'email' => 'janedoe@gmail.com',
                    'password' => bcrypt('secret'),
                    'bio'   => $faker->text(rand(200, 300)),
                ],
                [
                    'name' => 'JohnDoe',
                    'slug'  => 'john-doe',
                    'email' => 'johndoe@gmail.com',
                    'password' => bcrypt('secret'),
                    'bio'   => $faker->text(rand(200, 300)),
                ],
                [
                    'name' => 'Ricardo',
                    'slug'  => 'ricardo',
                    'email' => 'ricardosilitonga81@gmail.com',
                    'password' => bcrypt('secret'),
                    'bio'   => $faker->text(rand(200, 300)),
                ]
            ]);
    }
}
