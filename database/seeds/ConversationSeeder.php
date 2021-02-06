<?php

use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=5;$i++){
            DB::table('conversations')->insert([
                'id' => $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
