<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $train = new Train();

            $train->Azienda = $faker->randomElement(['Trenitalia', 'Italo_treno', 'Frecciarossa']);
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->Orario_di_arrivo = $faker->dateTimeBetween();
            $train->Codice_Treno = $faker->randomNumber(2);
            $train->Numero_Carrozze = $faker->randomNumber(2);
            $train->In_orario = $faker->boolean();
            $train->Cancellato =$faker->boolean();

            $train->save();
        }
    }
}
