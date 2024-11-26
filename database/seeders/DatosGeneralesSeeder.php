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

        $datosGenerales = [
            ['nombre' => 'Oscar', 'domicilio' => 'Calle Suripanta', 'entidad' => 'Coacalco', 'ocupacion' => 'transportista', 'escolaridad' => 'secundaria', 'fechaNacimiento' => '2024-11-04T06:00:00.000Z', 'edad' => 51, 'sexo' => 'masculino', 'lugarNacimiento' => 'Naucalpan', 'estadoCivil' => 'casado', 'numeroTelefono' => '7676767676'],
            ['nombre' => 'Carmela', 'domicilio' => 'Calle tragacantos', 'entidad' => 'Coacalco', 'ocupacion' => 'ama de casa', 'escolaridad' => 'preparatoria', 'fechaNacimiento' => '2024-11-04T06:00:00.000Z', 'edad' => 62, 'sexo' => 'femenino', 'lugarNacimiento' => 'Naucalpan', 'estadoCivil' => 'casado', 'numeroTelefono' => '9898989898']
           ];
           foreach ($datosGenerales as $dg) {
                DB::table('datos_generales')->insert($dg);
           }

        $antecedentesFamiliares = [
            ['madre' => true, 'abuelaM' => false, 'abueloM' => true, 'otrosM' => true, 'padre' => false, 'abuelaP' => true, 'abueloP' => false, 'hermanosP' => true, 'otrosP' => false, 'idPatologias' => 1, 'idDatosGenerales' => 1],
            ['madre' => false, 'abuelaM' => true, 'abueloM' => true, 'otrosM' => true, 'padre' => false, 'abuelaP' => false, 'abueloP' => true, 'hermanosP' => false, 'otrosP' => false, 'idPatologias' => 2, 'idDatosGenerales' => 2]
            ];
            foreach ($antecedentesFamiliares as $af) {
                DB::table('antecedentes_fy_h_s')->insert($af);
            }

        $antecedentesFamiliaresPyP = [
            ['si' => true, 'no' => false, 'fechaAgno' => "1993", 'idEnfermedad' => 1, 'idDatosGenerales' => 1],
            ['si' => false, 'no' => true, 'fechaAgno' => "2000", 'idEnfermedad' => 2, 'idDatosGenerales' => 2],
            ];
            foreach ($antecedentesFamiliaresPyP as $afPyP) {
                DB::table('antecedentes_py_p_s')->insert($afPyP);
            }

        $antecedentesFamiliaresPyP = [
            ['alcohol' => true, 'tabaquismo' => false, 'drogas' => true, 'otros' => true, 'idDatosGenerales' => 1],
            ['alcohol' => false, 'tabaquismo' => true, 'drogas' => false, 'otros' => true, 'idDatosGenerales' => 2],
            ];
            foreach ($antecedentesFamiliaresPyP as $afPyP) {
                DB::table('antecedentes_p_no_p_s')->insert($afPyP);
            }
            
        $padecimientosActuales = [
            ['preguntaUno' => true, 
            'preguntaUnoS' => 'algo1', 
            'preguntaDos' => true, 
            'preguntaDosS' => 'algo dos', 
            'preguntaTres' => true, 
            'preguntaTresS' => 'algo tres', 
            'preguntaCuatro' => true, 
            'preguntaCuatroS' => 'algo cuatro', 
            'preguntaCinco' => true, 
            'preguntaCincoS' => 'algo cinco', 
            'preguntaSeis' => true, 
            'preguntaSeisS' => 'algo seis', 
            'preguntaSiete' => true, 
            'preguntaSieteS' => 'algo siete', 
            'preguntaOcho' => true, 
            'preguntaOchoS' => 'algo ocho', 
            'idDatosGenerales' => 1],
            ['preguntaUno' => true, 
            'preguntaUnoS' => 'algo1', 
            'preguntaDos' => true, 
            'preguntaDosS' => 'algo dos', 
            'preguntaTres' => true, 
            'preguntaTresS' => 'algo tres', 
            'preguntaCuatro' => true, 
            'preguntaCuatroS' => 'algo cuatro', 
            'preguntaCinco' => true, 
            'preguntaCincoS' => 'algo cinco', 
            'preguntaSeis' => true, 
            'preguntaSeisS' => 'algo seis', 
            'preguntaSiete' => true, 
            'preguntaSieteS' => 'algo siete', 
            'preguntaOcho' => true, 
            'preguntaOchoS' => 'algo ocho', 
            'idDatosGenerales' => 2],
            ];
            foreach ($padecimientosActuales as $padecimiento) {
                DB::table('padecimientos_actuales')->insert($padecimiento);
            }
    }
}
