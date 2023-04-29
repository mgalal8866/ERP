<?php

namespace App\Http\Livewire\Pos;

use App\Models\customers;
use Livewire\Component;

class Pos extends Component
{
    public $selected,$customers;
    // $customers ;
    protected $listeners = ['update-customer' => 'getcustomers'];
    public function mount(){
        $this->customers = customers::all();
    }
    public function updatedselected(){
        dd($this->selected);
    }
    public function getcustomers(){
        $this->customers = customers::all();
    }
    public function demo()
    {
        $this->dispatchBrowserEvent('swal',['message'=>'DEMO  version   ' ]);
    }
    public function render()
    {
        // $customers = customers::all();
        return view('livewire.pos.pos');
    }
}
