<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PoblarServicio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('servicios')->insert([
          'nombre' => 'Basico',
          'descripcion' => 'Servicio basico',
          'precio' => 300,
          'MontoMora' => 50,
          'activo' => 1,
          'cobrador_id' => 1,
      ]);
      DB::table('servicios')->insert([
          'nombre' => 'Premium',
          'descripcion' => 'Servicio premium',
          'precio' => 700,
          'MontoMora' => 80,
          'activo' => 1,
          'cobrador_id' => 2,
      ]);
      DB::table('servicios')->insert([
          'nombre' => 'Platino',
          'descripcion' => 'Servicio platino',
          'precio' => 100,
          'MontoMora' => 100,
          'activo' => 1,
          'cobrador_id' => 3,
      ]);
    }
}
