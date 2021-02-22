<?php

namespace App;

use App\Image;
use App\Order;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name', 'description', 'category_id', 'subCategory_id', 'price', 'image', 'created_at', 'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function first_image()
    {
        return $this->hasOne(Image::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
