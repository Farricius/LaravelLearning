<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamosm', function (Blueprint $table) {
            $table->id();
            $table->string("ISBN_recibir", 13);
            $table->foreign("ISBN_recibir")->references("ISBN")->on("librosm");
            $table->string("FechaInicio"); // O DATE
            $table->string("FechaFin"); // O DATE
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamosm');
    }
}
