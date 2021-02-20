<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'الاسم', 'created_at', 'updated_at',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function filters()
    {
        return $this->hasMany(Filter::class);
    }


}
