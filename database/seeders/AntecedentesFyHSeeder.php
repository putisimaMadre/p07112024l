<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AntecedentesFyHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records=[
            ['madre' => false, 'abuelaM' => false, 'abueloM' => false, 'otrosM' => false, 'padre' => false, 'abuelaP' => true, 'abueloP' => true, 'hermanosP' => false, 'otrosP' => false, 'idPatologias' => 1, 'idDatosGenerales' => 2],
            ['madre' => false, 'abuelaM' => true, 'abueloM' => true, 'otrosM' => false, 'padre' => false, 'abuelaP' => true, 'abueloP' => true, 'hermanosP' => false, 'otrosP' => false, 'idPatologias' => 2, 'idDatosGenerales' => 2],
            ['madre' => true, 'abuelaM' => true, 'abueloM' => true, 'otrosM' => false, 'padre' => false, 'abuelaP' => true, 'abueloP' => true, 'hermanosP' => false, 'otrosP' => false, 'idPatologias' => 3, 'idDatosGenerales' => 2],
            ['madre' => false, 'abuelaM' => true, 'abueloM' => true, 'otrosM' => false, 'padre' => false, 'abuelaP' => true, 'abueloP' => true, 'hermanosP' => false, 'otrosP' => false, 'idPatologias' => 5, 'idDatosGenerales' => 3],
            ['madre' => false, 'abuelaM' => false, 'abueloM' => false, 'otrosM' => false, 'padre' => false, 'abuelaP' => true, 'abueloP' => true, 'hermanosP' => false, 'otrosP' => true, 'idPatologias' => 6, 'idDatosGenerales' => 3],
           ];
           foreach ($records as $record) {
                DB::table('antecedentes_fy_h_s')->insert($record);
           }
    }
}
