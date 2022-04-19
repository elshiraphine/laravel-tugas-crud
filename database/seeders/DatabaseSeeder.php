<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Country::create([
            'name' => 'France',
            'status' => TRUE,
        ]);

            Destination::create([
                'name' => 'Eiffel Tower',
                'address' => 'Champ de Mars, 5 Av. Anatole France, 75007 Paris, France',
                'status' => TRUE,
                'country_id' => 1
            ]);

            Destination::create([
                'name' => 'Notre Dame Cathedral',
                'address' => '6 Parvis Notre-Dame - Pl. Jean-Paul II, 75004 Paris, France',
                'status' => FALSE,
                'country_id' => 1
            ]);

            Destination::create([
                'name' => 'French Riviera (Côte d Azur)',
                'address' => '-',
                'status' => TRUE,
                'country_id' => 1
            ]);

            Destination::create([
                'name' => 'Joan of Arc Monuments',
                'address' => '7 Rue Saint-Romain, 76000 Rouen, France',
                'status' => TRUE,
                'country_id' => 1
            ]);

        Country::create([
            'name' => 'Spain',
            'status' => TRUE,
        ]);

            Destination::create([
                'name' => 'The Great Mosque of Córdoba (Mezquita)',
                'address' => 'C. Cardenal Herrero, 1, 14003 Córdoba, Spain',
                'status' => TRUE,
                'country_id' => 2
            ]);

            Destination::create([
                'name' => 'Teide National Park',
                'address' => 'Santa Cruz de Tenerife, Spain',
                'status' => TRUE,
                'country_id' => 2
            ]);

            Destination::create([
                'name' => 'The White Towns of Andalucía',
                'address' => 'Cádiz and Málaga',
                'status' => TRUE,
                'country_id' => 2
            ]);

            Destination::create([
                'name' => 'La Sagrada Familia',
                'address' => ' C/ de Mallorca, 401, 08013 Barcelona, Spain',
                'status' => TRUE,
                'country_id' => 2
            ]);

            Destination::create([
                'name' => 'Canary Islands',
                'address' => '-',
                'status' => TRUE,
                'country_id' => 2
            ]);

            Destination::create([
                'name' => 'Ibiza',
                'address' => 'Balearic Islands',
                'status' => TRUE,
                'country_id' => 2
            ]);

        // Country::create([
        //     'name' => 'Italy',
        //     'status' => TRUE,
        // ]);

        // Country::create([
        //     'name' => 'Turkey',
        //     'status' => TRUE,
        // ]);

        // Country::create([
        //     'name' => 'Germany',
        //     'status' => TRUE,
        // ]);

        // Country::create([
        //     'name' => 'Austria',
        //     'status' => TRUE,
        // ]);

        // Country::create([
        //     'name' => 'Greece',
        //     'status' => TRUE,
        // ]);

        // Country::create([
        //     'name' => 'Russia',
        //     'status' => FALSE,
        // ]);

        // Country::create([
        //     'name' => 'Portugal',
        //     'status' => TRUE,
        // ]);

        // Country::create([
        //     'name' => 'Ukraine',
        //     'status' => FALSE,
        // ]);

        // Country::create([
        //     'name' => 'Norway',
        //     'status' => TRUE,
        // ]);

        // Country::create([
        //     'name' => 'Finland',
        //     'status' => TRUE,
        // ]);
    }
}
