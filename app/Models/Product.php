<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_Asset;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_name',
        'product_slug',
        'category_id',
        'price',
        'description'
    ];

    public function product_asset()
    {
        return $this->hasMany(Product_Asset::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
