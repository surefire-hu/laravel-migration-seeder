<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Carbon\Carbon; 

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        Train::truncate();

        for ($i=0; $i < 10; $i++) { 
        $train = new Train();
        $train->azienda = 'AZIENDA';  
        $train->stazione_partenza = 'STAZIONE PARTENZA';  
        $train->data_partenza = Carbon::now()->addDays($i)->format('Y-m-d'); 
        $train->stazione_arrivo = 'STAZIONE ARRIVO';  
        $train->orario_partenza = '12:00:00'; 
        $train->orario_arrivo = '13:00:00'; 
        $train->codice_treno = 'CODICE';
        $train->numero_carrozze = 8; 
        $train->in_orario = true;
        $train->cancellato = false;
        $train->save();
        }
        
    }
}
