<?php

namespace App\Http\Livewire\Customer;

use App\Models\customers;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name,$email,$code,$address,$brand,$birthday,$pricing,$phone;

    public function mount(){
        $this->reset(['name', 'email', 'code', 'address', 'phone','brand','birthday','pricing']);

    }

    public function savecustomer()
    {
        ##CREATE CUSTOMER
        if($this->code == null){
            $Gcode      = customers::max('code');
            $Gcode      = substr($Gcode, 2);
            $number     = intval($Gcode);
            $number++;
            $this->code =  'CO' . str_pad($number, 5, '0', STR_PAD_LEFT);
        }
        $customer = customers::create(
            [
                'name'      => $this->name,
                'email'     => $this->email,
                'code'      => $this->code,
                'address'   => $this->address,
                'phone'     => $this->phone,
                'brand'     => $this->brand,
                'birthday'  => $this->birthday,
                'pricing'   => $this->pricing,
            ]);
            $this->dispatchBrowserEvent('closeModal',['message'=> __('tran.sucesscustomrt') ]);
            $this->emit('view-customer');
            $this->reset(['name', 'email', 'code', 'address', 'phone','brand','birthday','pricing']);


    }
    public function render()
    {
        return view('livewire.customer.create-customer');
    }
}
