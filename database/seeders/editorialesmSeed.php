<?php

namespace Database\Seeders;

use App\Models\Editorial;
use Illuminate\Database\Seeder;

class editorialesmSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //"COMANDOS
        $editorial1 = new Editorial();

        $editorial1->Nombre = "Salamandra";
        $editorial1->Nacionalidad = "Espanola";
        $editorial1->save();

    }
}
