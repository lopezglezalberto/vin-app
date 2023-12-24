<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EquipmentCode;

class EquipmentCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipment_code = [
            
            [
                'code' => '000',
                'description' => 'Base platform'
            ],  
            [
                'code' => '014',
                'description' => 'Bumper'
            ],
            [
                'code' => '037',
                'description' => 'Drum Mulcher'
            ],
            [
                'code' => '036',
                'description' => 'Side Trimmer'
            ],
            [
                'code' => '038',
                'description' => 'Sprayer'
            ],
            [
                'code' => '027',
                'description' => 'Lawn Mower'
            ]
            
        ];

        EquipmentCode::insert($equipment_code);
    }
}
