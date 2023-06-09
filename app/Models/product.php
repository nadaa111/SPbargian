<?php

namespace App\Models;

use App\Models\productImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'category_id',
         'name',
         'slug',
         'small_description',
         'description',
         'original_price',
         'selling_price',
         'quanitity',
         'trending',
         'status',
         'meta_title',
         'meta_description',
         'meta_keyword',


    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function productImages(){
        return $this->hasMany(productImage::class, 'product_id', 'id');
    }

}
