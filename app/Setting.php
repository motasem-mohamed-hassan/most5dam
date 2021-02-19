<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $fillable = [
        'phone1', 'phone2', 'location', 'facebook', 'twitter', 'instegram', 'created_at', 'updated_at',
   ];

    public $timestamps = false;
}
