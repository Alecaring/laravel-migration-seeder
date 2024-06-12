<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\App;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ottieni un'istanza di Faker
        $faker = App::make(Faker::class);

        // Loop per creare 10 record
        for ($i = 0; $i < 10; $i++) {
            $data = new Train;
            $data->azienda = $faker->company;
            $data->stazione_partenza = $faker->city;
            $data->stazione_arrivo = $faker->city;
            $data->orario_partenza = $faker->time($format = 'H:i:s', $max = 'now');
            $data->orario_arrivo = $faker->time($format = 'H:i:s', $max = 'now');
            $data->codice_treno = strtoupper($faker->bothify('??###'));
            $data->numero_carrozze = $faker->numberBetween(1, 20);
            $data->in_orario = $faker->boolean;
            $data->cancellato = $faker->boolean;
            $data->created_at = now();
            $data->updated_at = now();
            $data->save(); // Salva il modello nel database
        }
    }
}
