<?php

namespace App;

use App\Image;
use App\Order;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['user_id', 'category_id', 'brand_id', 'model', 'manufacture year', 'wheel type', 'product',
     'machines place', 'machines type', 'machines power', 'machines age', 'caple type',
     'age', 'transmission type', 'kilometers', 'engine capacity', 'screen size', 'memory', 'storage',
      'generation', 'color', 'accessories', 'processor', 'cooling power', 'cooling type', 'capacitance',
       'megapixel', 'screen type', 'length', 'machines number', 'size', 'manufacture type', 'fuelType', 'energy',
        'city', 'material', 'material', 'description', 'price', 'status'];


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
