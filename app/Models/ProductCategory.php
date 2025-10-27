<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $table        = 'product_category';
    protected $primaryKey   = 'id';
    protected $fillable     = ['descripcion'];
    protected $dates        = ['created_at', 'updated_at', 'deleted_at'];
}
