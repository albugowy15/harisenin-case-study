<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Asset;

class Product_Asset extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'asset_id',
        'product_id'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function asset()
    {
        return $this->hasMany(Asset::class);
    }
}
