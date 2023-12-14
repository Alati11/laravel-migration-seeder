<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Travel();

            $new_train->azienda = $faker->bothify('???#####');
            $new_house->stazione_di_partenza = $faker->city();
            $new_house->stazione_di_arrivo = $faker->city();
            $new_house->orario_di_partenza = $faker->dateTime();
            $new_house->orario_di_arrivo = $faker->dateTime();
            $new_house->codice_treno = $faker->bothify('#####');
            $new_house->numero_carrozze = $faker->numberBetween(6, 14);
            $new_house->in_orario = $faker->randomElement([false, true]);
            $new_house->cancellato = $faker->randomElement([false, true]);


            // var_dump($new_train);
            $new_train->save();
        }
    }
}
