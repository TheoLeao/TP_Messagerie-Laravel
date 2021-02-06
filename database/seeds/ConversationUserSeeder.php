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
        //Création d'une conversation pour mon utilisateur test
        DB::table('conversation_user')->insert([
            'user_id' => 1,
            'conversation_id' => 1
        ]);
    }
}
