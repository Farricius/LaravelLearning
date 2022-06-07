<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librosm', function (Blueprint $table) {
            $table->string("ISBN", 13)->primary();
            $table->string("Titulo", 255);
            $table->string("Autor", 255);
            $table->string("Idioma", 25);
            $table->string("Publicacion"); // fechas
            $table->foreignId("Editorial")->constrained("editorialesm");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('librosm');
    }
}
