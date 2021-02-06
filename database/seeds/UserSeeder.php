<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Création de mon compte de test
        DB::table('users')->insert(
            [
                "email" => "theoleaoboudier@gmail.com",
                "password" => Hash::make('password'),
                "name" => "ThéoBoudier",
                'remember_token' => Str::random(10)
            ]
        );
        factory(App\User::class, 10)->create();
    }
}
