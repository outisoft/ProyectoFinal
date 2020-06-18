<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PoblarMensages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('messages')->insert([
          'body' => 'Tienes un nuevo serivicio',
          'sender_id'=> 1,
          'recipient_id'=>4,
      ]);
      DB::table('messages')->insert([
          'body' => 'Tienes un nuevo serivicio',
          'sender_id'=> 2,
          'recipient_id'=>5,
      ]);
      DB::table('messages')->insert([
          'body' => 'Tienes un nuevo serivicio',
          'sender_id'=> 3,
          'recipient_id'=>6,
      ]);
      DB::table('messages')->insert([
          'body' => 'Tienes un nuevo serivicio',
          'sender_id'=> 1,
          'recipient_id'=>7,
      ]);
    }
}
