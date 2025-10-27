<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitMeasure extends Model
{
    use HasFactory, SoftDeletes;
    protected $table        = 'unit_measure';
    protected $primaryKey   = 'id';
    protected $fillable     = ['description', 'aka'];
    protected $dates        = ['created_at', 'updated_at', 'deleted_at'];
}
