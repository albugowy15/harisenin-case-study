<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asset;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_name',
        'category_slug',
        'asset_id',
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
