<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('messages')->insert([
            'content' => 'Welcome to our website',
            'sender_id' => 1,
            'receiver_id' => 2,
            'created_at' => now()->subMinutes(50),
            'updated_at' => now()->subMinutes(50)
        ]);

        DB::table('messages')->insert([
            'content' => 'Thanks mate',
            'sender_id' => 2,
            'receiver_id' => 1,
            'created_at' => now()->subMinutes(40),
            'updated_at' => now()->subMinutes(40)
        ]);

        DB::table('messages')->insert([
            'content' => 'You\'re welcome !',
            'sender_id' => 1,
            'receiver_id' => 2,
            'created_at' => now()->subMinutes(30),
            'updated_at' => now()->subMinutes(30)
        ]);

        DB::table('messages')->insert([
            'content' => 'Do you like sushi ? !',
            'sender_id' => 1,
            'receiver_id' => 2,
            'created_at' => now()->subMinutes(20),
            'updated_at' => now()->subMinutes(20)
        ]);

        DB::table('messages')->insert([
            'content' => 'Yes i like',
            'sender_id' => 2,
            'receiver_id' => 1,
            'created_at' => now()->subMinutes(10),
            'updated_at' => now()->subMinutes(10)
        ]);

        DB::table('messages')->insert([
            'content' => 'Me too',
            'sender_id' => 1,
            'receiver_id' => 2,
            'created_at' => now()->subMinutes(0),
            'updated_at' => now()->subMinutes(0)
        ]);
    }
}
