<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\products;
use Livewire\WithPagination;
use Illuminate\Contracts\View\View;

class ViewProduct extends Component
{
    use WithPagination;
    protected $listeners = ['view-customer' => '$refresh'];
    protected $paginationTheme = 'bootstrap';

    public function render(): View
    {
        $products = products::latest()->paginate(4);
        return view('livewire.product.view-product',['products' => $products]);
    }
}
