<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records=[
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
           foreach ($records as $record) {
                DB::table('patologias')->insert($record);
           }
        
    }
}
