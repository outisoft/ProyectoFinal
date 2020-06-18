<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PoblarServicioSuscriptor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('servicios_suscriptor')->insert([
          'servicios_id'=> 1,
          'suscriptor_id'=> 4,
      ]);

      DB::table('servicios_suscriptor')->insert([
          'servicios_id'=> 2,
          'suscriptor_id'=> 5,
      ]);

      DB::table('servicios_suscriptor')->insert([
          'servicios_id'=> 3,
          'suscriptor_id'=>6,
      ]);
    }
}
