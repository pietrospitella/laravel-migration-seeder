<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $new_trip = new Trip();
            $new_trip->destination=$faker->countryCode();
            $new_trip->duration='7';
            $new_trip->price=$faker->randomFloat(2, 900, 3000);
            $new_trip->departure=$faker->dateTimeThisMonth();
            $new_trip->arrival= $faker->dateTimeThisMonth('+ 7 days');
            $new_trip->save();
        }
    }
}
