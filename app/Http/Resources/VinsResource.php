<?php

namespace App\Http\Resources;

use App\Models\EquipmentCode;
use App\Models\PlaceProduction;

use Illuminate\Http\Resources\Json\JsonResource;

class VinsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $equipment_code = EquipmentCode::find($this->equipment_code_id);
        $place_production = PlaceProduction::find($this->place_production_id);

        return [
            'description' => $this->vin,
            'version' => $this->version,
            'equipment_code' => $equipment_code->code,
            'year_issue' => $this->year_issue,
            'serial_number' => $this->serial_number,
            'place_production' => $place_production->place
        ];
    }
}
