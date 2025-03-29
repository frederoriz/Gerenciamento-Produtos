<?php

namespace App\Livewire;

use App\Enum\StatusEnum;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
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
        return view('livewire.products', [
            'products' => $this->products,
            'statusOptions' => StatusEnum::options(),
        ]);
    }
}
