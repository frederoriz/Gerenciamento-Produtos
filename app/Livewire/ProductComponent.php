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
        // Simulando dados sem acessar o banco
        $this->products = collect([
            ['id' => 1, 'name' => 'Produto 1', 'price' => 100],
            ['id' => 2, 'name' => 'Produto 2', 'price' => 200],
        ]);

    }

    /**
     * Renderiza a view de produtos
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.product-component', [
            'products' => $this->products,
        ]);
    }
}
