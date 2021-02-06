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
            'conversation_id' => 1,
            'receiver_id' => 1,
            'sender_id' => 2,
            'content' => 'Welcome to our website',
            'created_at' => now()->subMinutes(10),
            'updated_at' => now()->subMinutes(10)
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 1,
            'receiver_id' => 2,
            'sender_id' => 1,
            'content' => 'Thanks mate',
            'created_at' => now()->subMinutes(5),
            'updated_at' => now()->subMinutes(5)
        ]);
    }
}
