<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnfermedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enfermedades=[
            ['enfermedades' => 'Varicela'],
            ['enfermedades' => 'Rubéola'],
            ['enfermedades' => 'Sarampión'],
            ['enfermedades' => 'Parotiditis'],
            ['enfermedades' => 'Tosferina'],
            ['enfermedades' => 'Escarlatina'],
            ['enfermedades' => 'Parasitosis'],
            ['enfermedades' => 'Hepatitis'],
            ['enfermedades' => 'SIDA'],
            ['enfermedades' => 'Asma'],
            ['enfermedades' => 'Disfunciones Endocrinas'],
            ['enfermedades' => 'Hipertensión'],
            ['enfermedades' => 'Cancer'],
            ['enfermedades' => 'Enfermedades Transmisión Sexual'],
            ['enfermedades' => 'Epilepsia'],
            ['enfermedades' => 'Amigdalitis'],
            ['enfermedades' => 'Tuberculosis'],
            ['enfermedades' => 'Fiebre Reumática'],
            ['enfermedades' => 'Diabetes'],
            ['enfermedades' => 'Enfermedades Cardiovasculares'],
            ['enfermedades' => 'Artritis'],
            ['enfermedades' => 'Traumatitis con secuelas'],
            ['enfermedades' => 'Intervencion Quirúrgica'],
            ['enfermedades' => 'Transfusión Sanguinea'],
            ['enfermedades' => 'Alergias a:'],
           ];
           foreach ($enfermedades as $enfermedad) {
                DB::table('enfermedads')->insert($enfermedad);
           }
    }
}
