<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('datejr');
            $table-> time('heure_arrive');
            $table-> time('heure_sorti');
            $table->string('absence')->nullable();
            $table-> string('motif')->nullable();
            $table->unsignedBigInteger('personne_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tallies');
    }
}
