<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductColor extends Model
{
    use HasFactory, SoftDeletes;
    protected $table        = 'product_color';
    protected $primaryKey   = 'id';
    protected $fillable     = ['code', 'description'];
    protected $dates        = ['created_at', 'updated_at', 'deleted_at'];
}
