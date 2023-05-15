<?php

namespace Database\Seeders;

use App\Functions\Helpers;
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

        $csvContent = Helpers::getCsvContent(__DIR__ . '/trains.csv');

        foreach ($csvContent as $index => $row) {
            if ($index > 0) {
                $train = new Train();
                $train->company = $row[0];
                $train->departure_station = $row[1];
                $train->arrival_station = $row[2];
                $train->departure_time = $row[3];
                $train->arrival_time = $row[4];
                $train->train_code = $row[5];
                $train->wagons_number = $row[6];
                $train->on_time = $row[7];
                $train->cancelled = $row[8];
                $train->save();
            }
        }
    }
}
// for($i = 0; $i < 20; $i++){
        //     $train = new Train();

        //     $train->Azienda = $faker->randomElement(['Trenitalia', 'Italo_treno', 'Frecciarossa']);
        //     $train->Stazione_di_partenza = $faker->city();
        //     $train->Stazione_di_arrivo = $faker->city();
        //     $train->Orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
        //     $train->Orario_di_arrivo = $faker->dateTimeBetween();
        //     $train->Codice_Treno = $faker->randomNumber(2);
        //     $train->Numero_Carrozze = $faker->randomNumber(2);
        //     $train->In_orario = $faker->boolean();
        //     $train->Cancellato =$faker->boolean();

        //     $train->save();
        // }
