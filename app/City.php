<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    public function neighborhood()
    {
        return $this->hasMany(City::class)->where('city_id', $this->id);
    }
}
