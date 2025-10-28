<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductManufacturer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table        = 'product_manufacturer';
    protected $primaryKey   = 'id';
    protected $fillable     = ['name', 'description', 'detail'];
    protected $dates        = ['created_at', 'updated_at', 'deleted_at'];
}
