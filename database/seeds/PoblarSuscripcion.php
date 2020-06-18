<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PoblarSuscripcion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('suscripcion')->insert([
          'user_id' => 4,
          'nombre' => 'user1',
          'precio' => 300,
      ]);
      DB::table('suscripcion')->insert([
          'user_id' => 5,
          'nombre' => 'user2',
          'precio' => 300,
      ]);
      DB::table('suscripcion')->insert([
          'user_id' => 6,
          'nombre' => 'user3',
          'precio' => 300,
      ]);
      DB::table('suscripcion')->insert([
          'user_id' => 7,
          'nombre' => 'user4',
          'precio' => 300,
      ]);
    }

}
