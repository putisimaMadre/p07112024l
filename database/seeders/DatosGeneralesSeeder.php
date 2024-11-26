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

            $analisisFaciales = [
                ['patronFacial' => 1, 'perfil' => 5, 'asimetria' => 9, 'alturaFE' => 10, 'anchuraFE' => 15, 'perfilMaxilar' => 18, 'perfilMandibular' => 21, 'surcoLM' => 23, 'labiosEr' => 26, 'idDatosGenerales' => 1],
                ['patronFacial' => 2, 'perfil' => 4, 'asimetria' => 8, 'alturaFE' => 12, 'anchuraFE' => 14, 'perfilMaxilar' => 17, 'perfilMandibular' => 19, 'surcoLM' => 22, 'labiosEr' => 25, 'idDatosGenerales' => 2],
                ];
                foreach ($analisisFaciales as $afPyP) {
                    DB::table('analisis_facials')->insert($afPyP);
                }
                /*
                Query en sql para obtener los nombres
                SELECT dentista.analisis_facials.idAnalisisFacial, dentista.analisis_facial_nombres.nombre
                FROM dentista.analisis_facials
                INNER JOIN dentista.analisis_facial_nombres ON dentista.analisis_facial_nombres.id = 1;
                */
            $analisisFuncional = [
                ['actividadComisural' => 1, 'actividadLingual' => 3, 'labioSuperior' => 5, 'labioInferior' => 1, 'masetero' => 5, 'mentoniano' => 6, 'respiracion' => 8, 'deglucion' => 9, 'idDatosGenerales' => 1],
                ['actividadComisural' => 2, 'actividadLingual' => 3, 'labioSuperior' => 5, 'labioInferior' => 6, 'masetero' => 6, 'mentoniano' => 1, 'respiracion' => 10, 'deglucion' => 11,'idDatosGenerales' => 2],
                ];
                foreach ($analisisFuncional as $aF) {
                    DB::table('analisis_funcionals')->insert($aF);
                }
    }
}
