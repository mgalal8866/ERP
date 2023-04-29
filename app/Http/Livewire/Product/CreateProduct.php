<?php

namespace App\Http\Livewire\Product;

use App\Models\products;
use App\Models\produts;
use Livewire\Component;

class CreateProduct extends Component
{
    public $name,$barcode,$qtyalert,$subunit,$mainunit,$description,$price;

    public function mount(){
        $this->reset(['name', 'barcode', 'qtyalert', 'subunit', 'mainunit','description','price']);

    }

    public function saveproduct()
    {
        ##CREATE product
        // if($this->code == null){
        //     $Gcode      = products::max('code');
        //     $Gcode      = substr($Gcode, 2);
        //     $number     = intval($Gcode);
        //     $number++;
        //     $this->code =  'CO' . str_pad($number, 5, '0', STR_PAD_LEFT);
        // }
        // $product = produts::create(
        //     [
        //         'name'      => $this->name,
        //         'email'     => $this->email,
        //         'code'      => $this->code,
        //         'address'   => $this->address,
        //         'phone'     => $this->phone,
        //         'brand'     => $this->brand,
        //         'birthday'  => $this->birthday,
        //         'pricing'   => $this->pricing,
        //     ]);
            $this->dispatchBrowserEvent('closeModal',['message'=> __('tran.sucesscustomrt') ]);
            $this->emit('view-product');
            $this->reset(['name', 'barcode', 'qtyalert', 'subunit', 'mainunit','description','price']);


    }
    public function render()
    {
        return view('livewire.product.create-product');
    }
}
