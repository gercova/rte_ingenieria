<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        
    }

    public function index(){
        $totalProducts  = Product::whereNotNull('deleted_at')->count();
        $totalOrders    = Sale::all()->count();
        return view('admin/home/index', compact('totalProducts', 'totalOrders'));
    }
}
