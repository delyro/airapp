<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'name'];

    public function stations() {
        return $this->hasMany(Station::class);
    }
}
