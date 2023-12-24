<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceProduction extends Model
{
    use HasFactory;

    public $table = 'place_production';
    
    public $timestamps = false;

    public $fillable = [
        'code',
        'place'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'place' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'code' => 'required|string|max:3',
        'place' => 'required|string|max:300'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vins()
    {
        return $this->hasMany(\App\Models\Vins::class, 'place_production_id');
    }
}
