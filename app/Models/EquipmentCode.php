<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentCode extends Model
{
    use HasFactory;

    public $table = 'equipment_code';
    
    public $timestamps = false;

    public $fillable = [
        'code',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'code' => 'required|string|max:3',
        'description' => 'required|string|max:300'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vins()
    {
        return $this->hasMany(\App\Models\Vins::class, 'equipment_code_id');
    }
}
