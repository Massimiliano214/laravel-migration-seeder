<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table->id();
        $table->char('azienda', 70);
        $table->char('stazione_partenza', 70);
        $table->char('stazione_arrivo', 70);
        $table->time('orario_partenza', $precision = 0);
        $table->time('orario_arrivo', $precision = 0);
        $table->unsignedSmallInteger('codice_treno');
        $table->unsignedTinyInteger('numero_carrozze')->nullable();
        $table->boolean('in_orario')->default(true);
        $table->boolean('cancellato')->default(false);
        $table->date('created_at')->format('d-m-Y');
    }
}
