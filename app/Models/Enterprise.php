<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;
    
    protected $table        = 'enterprise';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'ruc',
        'trade_name',
        'business_name',
        'proverb',
        'email',
        'address',
        'telephone',
        'description',
        'legal_representative',
        'logo',
        'icon',
        'logo_min',
        'banner',
        'creation_date',
    ];
    protected $dates = ['created_at', 'updated_at'];
}
