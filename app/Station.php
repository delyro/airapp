<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'city_id', 'name', 'addressStreet'];
}
