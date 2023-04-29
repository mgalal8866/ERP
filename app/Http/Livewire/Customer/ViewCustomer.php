<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\customers;
use Livewire\WithPagination;
use Illuminate\Contracts\View\View;

class ViewCustomer extends Component
{
    use WithPagination;
    protected $listeners = ['view-customer' => '$refresh'];
    protected $paginationTheme = 'bootstrap';

    public function demo()
    {
        $this->dispatchBrowserEvent('swal',['message'=>'DEMO  version   ' ]);
    }
    public function render(): View
    {
        $customers = customers::latest()->paginate(4);
        return view('livewire.customer.view-customer',['customers' => $customers]);
    }
}
