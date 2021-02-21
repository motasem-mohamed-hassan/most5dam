<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $fillable = [
        'category_id','filter_id', 'name', 'الاسم', 'brand', 'brand_id', 'created_at', 'updated_at',
    ];

    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }

}
