<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<2; $i++) {

            $train = new Train();

            
            $train->azienda = $faker->word();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->randomNumber(2, false);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->created_at = $faker->date();

            $train->save();

        }
        for ($i=0; $i<5; $i++) {

            $train = new Train();

            
            $train->azienda = $faker->word();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->randomNumber(2, false);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->created_at = date('Y-m-d');

            $train->save();

        }

        //csv

        $csvContent = Helpers::getCsvContent(__DIR__ . '/trains.csv');

        foreach ($csvContent as $index => $row) {
            if ($index > 0) {
                $train = new Train();

                $train->azienda = $row[0];
                $train->stazione_partenza = $row[1];
                $train->stazione_arrivo = $row[2];
                $train->orario_partenza = $row[3];
                $train->orario_arrivo = $row[4];
                $train->codice_treno = $row[5];
                $train->numero_carrozze = $row[6];
                $train->in_orario = $row[7];
                $train->cancellato = $row[8];
                $train->created_at = $faker->date();

                $train->save();

            }
        }
    }
}
