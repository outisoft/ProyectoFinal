<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PoblarUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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

        #$faker = Faker::create();
        #for ($i=0; $i < 5; $i++)
        #{
      #    \DB::table('users')->insert([
      #          'name' => $faker->firstNameFamale,
      #          'last_name' => $fake->lastName,
      #          'rfc' => 'CUBJ9811041HO',
      #          'email' => 'bartho98@ittg.com',
      #          'password' => bcrypt('cobrador'),
      #          'rol' => $faker->randomElement(['cobrador','suscriptor']),
      #      ]);
      #  }
    }
}
