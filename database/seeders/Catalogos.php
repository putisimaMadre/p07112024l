<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Catalogos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patologias=[
            ['patologias' => 'Diabetes'],
            ['patologias' => 'Hipertensión Arterial'],
            ['patologias' => 'Cardiopatías'],
            ['patologias' => 'Neoplasias'],
            ['patologias' => 'Epilepsia'],
            ['patologias' => 'Malformaciones'],
            ['patologias' => 'SIDA'],
            ['patologias' => 'Enfermedades Renales'],
            ['patologias' => 'Hepatitis'],
            ['patologias' => 'Artritis'],
            ['patologias' => 'Otra'],
            ['patologias' => 'Aparentemente Sano'],
           ];
           foreach ($patologias as $patologia) {
                DB::table('patologias')->insert($patologia);
           }

        $analisisFuncionalN=[
            ['id' => 1, 'nombre' => 'Normal'],
            ['id' => 2, 'nombre' => 'Contraccion'],
            ['id' => 3, 'nombre' => 'Interp. Anterior'],
            ['id' => 4, 'nombre' => 'Interp. Lateral'],
            ['id' => 5, 'nombre' => 'Hipoactivo'],
            ['id' => 6, 'nombre' => 'Hiperactivo'],
            ['id' => 7, 'nombre' => 'Bucal'],
            ['id' => 8, 'nombre' => 'Nasal'],
            ['id' => 9, 'nombre' => 'Atípica'],
            ['id' => 10, 'nombre' => 'Mixta'],
            ['id' => 11, 'nombre' => 'Especial'],
           ];
           foreach ($analisisFuncionalN as $aF) {
                DB::table('analisis_funcional_nombres')->insert($aF);
           }

           $analisisFacial=[
            ['nombre' => 'Mesofacial'],
            ['nombre' => 'Dolico Facial'],
            ['nombre' => 'Braquifacial'],
            ['nombre' => 'Recto'],
            ['nombre' => 'Cóncavo'],
            ['nombre' => 'Convexo'],
            ['nombre' => 'Mandibula derecha'],
            ['nombre' => 'Mandibula Izquierda'],
            ['nombre' => 'Otras'],
            ['nombre' => 'Equilibrada'],
            ['nombre' => 'Larga'],
            ['nombre' => 'Corta'],
            ['nombre' => 'Equilibrada'],
            ['nombre' => 'Larga'],
            ['nombre' => 'Corta'],
            ['nombre' => 'Ortognático'],
            ['nombre' => 'Prognático'],
            ['nombre' => 'Retrognático'],
            ['nombre' => 'Ortognático'],
            ['nombre' => 'Prognático'],
            ['nombre' => 'Retrognático'],
            ['nombre' => 'Normal'],
            ['nombre' => 'Marcado'],
            ['nombre' => 'Borrado'],
            ['nombre' => 'Competentes'],
            ['nombre' => 'Incompetentes'],
           ];
           foreach ($analisisFacial as $aF) {
                DB::table('analisis_facial_nombres')->insert($aF);
           }

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
