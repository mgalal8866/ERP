<?php

namespace App\Http\Livewire\Pos;

use App\Models\customers;
use Livewire\Component;

class Pos extends Component
{
    public $selected;

    public function selectedUpdated(){
        dd($this->selected);
    }

    public function render()
    {
        $customers = customers::all();
        return view('livewire.pos.pos',['customers'=>$customers]);
    }
}
