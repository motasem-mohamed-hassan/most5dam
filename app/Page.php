<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'header', 'description', 'video', 'video_description'
    ];

    public $timestamps = false;
}
