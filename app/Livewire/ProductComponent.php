<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductComponent extends Component
{
     public $products;

    /**
     * Busca os dados dos Produtos
     *
     * @return void
     */
    public function mount()
    {
        $this->products = Product::all();
    }

    /**
     * Renderiza a view de produtos
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.product_component', [
            'products' => $this->products,
        ]);
    }
}
