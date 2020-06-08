<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // php artisan db:seed <------poblar base de datos
        $this->PoblarUsuarios();
        $this->PoblarServicio();
    }
    public function PoblarUsuarios()
    {
      DB::table('users')->insert([
            'name' => 'Jorge',
            'last_name' => 'Bartolon',
            'rfc' => 'CUBJ9811041HO',
            'email' => 'bartho98@ittg.com',
            'password' => bcrypt('cobrador'),
            'rol' => 'cobrador',
        ]);
        DB::table('users')->insert([
            'name' => 'Jonathan',
            'last_name' => 'Velazquez',
            'rfc' => 'VETJ9701262HO',
            'email' => 'jonathan123@ittg.com',
            'password' => bcrypt('cobrador'),
            'rol' => 'cobrador',
        ]);

        DB::table('users')->insert([
            'name' => 'Cesar',
            'last_name' => 'Moralez',
            'rfc' => 'MOGC9806163HO',
            'email' => 'cesar_m@ittg.com',
            'password' => bcrypt('cobrador'),
            'rol' => 'cobrador',
        ]);
        DB::table('users')->insert([
            'name' => 'Cesar',
            'last_name' => 'Meza',
            'rfc' => 'MEPC9809224HO',
            'email' => 'meza_cesar@ittg.com',
            'password' => bcrypt('suscriptor'),
            'rol' => 'suscriptor',
        ]);
        DB::table('users')->insert([
            'name' => 'Dianina',
            'last_name' => 'Lopez',
            'rfc' => 'LOHG9801191MU',
            'email' => 'dianni@gmail.com',
            'password' => bcrypt('suscriptor'),
            'rol' => 'suscriptor',
        ]);
        DB::table('users')->insert([
            'name' => 'Kahory',
            'last_name' => 'Lopez',
            'rfc' => 'LORD9810302MU',
            'email' => 'kahory@gmail.com',
            'password' => bcrypt('suscriptor'),
            'rol' => 'suscriptor',
        ]);
        DB::table('users')->insert([
            'name' => 'Andy',
            'last_name' => 'Roblero',
            'rfc' => 'ROLA9701073MU',
            'email' => 'andy@gmail.com',
            'password' => bcrypt('suscriptor'),
            'rol' => 'suscriptor',
        ]);
    }
    public function PoblarServicio()
    {
      DB::table('servicios')->insert([
          'nombre' => 'Basico',
          'descripcion' => 'Servicio basico',
          'precio' => 300,
          'MontoMora' => 50,
          'activo' => 1,
          'cobrador_id' => 1,
      ]);
    }
}
