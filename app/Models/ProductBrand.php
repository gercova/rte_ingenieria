<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductBrand extends Model
{
    use HasFactory, SoftDeletes;

    protected $table        = 'product_brand';
    protected $primaryKey   = 'id';
    protected $fillable     = ['name', 'description', 'is_active'];
    protected $dates        = ['created_at', 'updated_at', 'deleted_at'];
}
