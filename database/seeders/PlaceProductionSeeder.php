<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlaceProduction;

class PlaceProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $place_production = [
            
            [
                'code' => '00',
                'place' => 'Slovenia'
            ],  
            [
                'code' => '01',
                'place' => 'Turkey'
            ],
            
        ];

        PlaceProduction::insert($place_production);
    }
}
