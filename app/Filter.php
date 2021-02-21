<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $fillable = [
        'category_id', 'name', 'الاسم', 'show_in_filter', 'brand', 'type', 'created_at', 'updated_at',
    ];

    public function values()
    {
        return $this->hasMany(Value::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
