<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table        = 'sale';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'receipt_type_id',
        'correlative',
        'client_id',
        'subtotal',
        'tax',
        'discount',
        'total',
        'sale_status',
        'payment_method_id',
        'payment_status',
        'shipping_address',
        'shipping_cost',
        'tracking_number',
        'shipping_status',
    ];
    protected $dates = ['created_at', 'updated_at'];
}
