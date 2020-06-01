<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PoblarUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 5; $i++)
        {
          \DB::table('users')->insert([
                'name' => $faker->firstNameFamale,
                'last_name' => $fake->lastName,
                'rfc' => 'CUBJ9811041HO',
                'email' => 'bartho98@ittg.com',
                'password' => bcrypt('cobrador'),
                'rol' => $faker->randomElement(['cobrador','suscriptor']),
            ]);
        }
    }
}
