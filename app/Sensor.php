<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'station_id'];
}
