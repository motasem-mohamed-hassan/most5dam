<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'parent_id', 'created_at', 'updated_at',
    ];

    public function products()
    {
        return $this-> hasMany(Product::class);
    }

    public function children()
    {
      return $this->hasMany('App\Category', 'parent_id');
    }

}
