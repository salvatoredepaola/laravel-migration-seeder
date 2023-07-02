<?php

namespace Database\Seeders;

use App\Models\trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run_()
    {
        
        $trains = config("store.trains");


        foreach ($trains as $train) {
            $newTrain = new trains();
            $newTrain->Azienda = $train["Azienda"];
            $newTrain->Stazione_di_partenza = $train["Stazione_di_partenza"];
            $newTrain->Stazione_di_arrivo = $train["Stazione_di_arrivo"];
            $newTrain->Orario_di_partenza = $train["Orario_di_partenza"];
            $newTrain->orario_di_arrivo = $train["orario_di_arrivo"];
            $newTrain->Codice_Treno = $train["Codice_Treno"];
            $newTrain->numero_Carrozze = $train["numero_Carrozze"];
            $newTrain->In_orario = $train["In_orario"];
            $newTrain->Cancellato = $train["Cancellato"];
            $newTrain->save();

        }
    }

    public function run(Faker $faker) {

        for ($i = 0; $i < 10 ; $i++) { 
            $newTrain = new trains();
            $newTrain->Azienda = $faker->sentence(3);
            $newTrain->Stazione_di_partenza = $faker->sentence(3);
            $newTrain->Stazione_di_arrivo = $faker->sentence(3);
            $newTrain->Orario_di_partenza = $faker->numberBetween(0,24);
            $newTrain->orario_di_arrivo = $faker->numberBetween(0,24);
            $newTrain->Codice_Treno = $faker->numberBetween(1000,9999);
            $newTrain->numero_Carrozze = $faker->numberBetween(1,2);
            $newTrain->In_orario = $faker->word();
            $newTrain->Cancellato = $faker->word();
            $newTrain->save();

        }

    }
}
