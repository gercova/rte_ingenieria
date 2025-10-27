<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_category_id',
        'product_type_id',
        'product_model_id',
        'unit_measure_id',
        'code',
        'product_color_id',
        'description',
        'detail',
        'characteristics',
        'specifications',
        'image',
        'stock',
        'price_min',
        'price_max',
        'discount',
        'offer',
        'batch',
        'expiration_date',
        'is_active',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
