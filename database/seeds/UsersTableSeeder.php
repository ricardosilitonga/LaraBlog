<?php

use Illuminate\Database\Seeder;

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

        // generate 3 users/authors
        DB::table('users')->insert(
            [
                [
                    'name' => 'JaneDoe',
                    'email' => 'janedoe@gmail.com',
                    'password' => bcrypt('secret')
                ],
                [
                    'name' => 'JohnDoe',
                    'email' => 'johndoe@gmail.com',
                    'password' => bcrypt('secret')
                ],
                [
                    'name' => 'Ricardo',
                    'email' => 'ricardo@gmail.com',
                    'password' => bcrypt('secret')
                ]
            ]);
    }
}
