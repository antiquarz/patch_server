<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'temperature', 'humidity', 'light', 'soil_moisture', 'air_quality'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
