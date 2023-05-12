<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
