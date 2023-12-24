<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vins extends Model
{
    use HasFactory;

    public $table = 'vins';
    
    public $timestamps = false;
    
    public $fillable = [
        'vin',
        'equipment_code_id',
        'place_production_id',
        'year_issue',
        'version',
        'serial_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vin' => 'string',
        'equipment_code_id' => 'integer',
        'place_production_id' => 'integer',
        'year_issue' => 'integer',
        'version' => 'integer',
        'serial_number' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vin' => 'nullable|string|max:17',
        'equipment_code_id' => 'required|integer',
        'place_production_id' => 'required|integer',
        'year_issue' => 'required|integer',
        'version' => 'required|integer',
        'serial_number' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function equipmentCode()
    {
        return $this->belongsTo(\App\Models\EquipmentCode::class, 'equipment_code_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function placeProduction()
    {
        return $this->belongsTo(\App\Models\PlaceProduction::class, 'place_production_id');
    }
}
