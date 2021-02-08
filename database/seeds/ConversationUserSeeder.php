<?php

use Illuminate\Database\Seeder;

class ConversationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Création d'une conversation entre l'utilisateur 1 et l'utilisateur 2
        DB::table('conversation_users')->insert([
            'user_id' => 1,
            'conversation_id' => 1
        ]);

        DB::table('conversation_users')->insert([
            'user_id' => 2,
            'conversation_id' => 1
        ]);

        //Création d'une conversation entre l'utilisateur 1 et l'utilisateur 
        DB::table('conversation_users')->insert([
            'user_id' => 1,
            'conversation_id' => 2
        ]);

        DB::table('conversation_users')->insert([
            'user_id' => 3,
            'conversation_id' => 2
        ]);
    }
}
