<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatosGeneralesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records=[
            ['nombre' => 'Oscar', 'domicilio' => 'Calle Suripanta', 'entidad' => 'Coacalco', 'ocupacion' => 'transportista', 'escolaridad' => 'secundaria', 'fechaNacimiento' => '2024-11-04T06:00:00.000Z', 'edad' => 51, 'sexo' => 'masculino', 'lugarNacimiento' => 'Naucalpan', 'estadoCivil' => 'casado', 'numeroTelefono' => '7676767676'],
            ['nombre' => 'Carmela', 'domicilio' => 'Calle tragacantos', 'entidad' => 'Coacalco', 'ocupacion' => 'ama de casa', 'escolaridad' => 'preparatoria', 'fechaNacimiento' => '2024-11-04T06:00:00.000Z', 'edad' => 62, 'sexo' => 'femenino', 'lugarNacimiento' => 'Naucalpan', 'estadoCivil' => 'casado', 'numeroTelefono' => '9898989898']
           ];
           foreach ($records as $record) {
                DB::table('datos_generales')->insert($record);
           }
    }
}
