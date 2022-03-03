<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['category_ar','category_en', 'name_ar','name_en','detiles_ar',
    'detiles_en','image' ];

    public function ProductImages()
    {
        return $this->HasMany(product_images::class);
    }
}
