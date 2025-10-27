<?php

namespace App\Livewire\Pw;

use App\Models\Product;
use Livewire\Component;

class Products extends Component {

    public $products;
    public function mount(){
        $this->products = Product::orderBy('id', 'desc')->limit(4)->get(); // Ajusta según tu modelo y lógica
    }

    public function render(){
        return view('livewire.pw.products');
    }
}
