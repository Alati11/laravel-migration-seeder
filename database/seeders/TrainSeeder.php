<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();

            $new_train->azienda = $faker->bothify('???????');
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->codice_treno = $faker->bothify('#####');
            $new_train->numero_carrozze = $faker->numberBetween(6, 14);
            $new_train->in_orario = $faker->randomElement([false, true]);
            $new_train->cancellato = $faker->randomElement([false, true]);


            // var_dump($new_train);
            $new_train->save();
        }
    }
}
