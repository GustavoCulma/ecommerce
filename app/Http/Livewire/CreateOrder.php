<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Department;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;

class CreateOrder extends Component
{
    public $envio_type = 1;

    public $contact;
    public $phone;
    public $address;
    public $references;
    public $shipping_cost = 0;

    public $departments;
    public $cities = [];

    public $department_id = "";
    public $city_id = "";


    public $rules = [
        'contact' => 'required',
        'phone' => 'required',
        'envio_type' => 'required'
    ];

    public function mount()
    {
        $this->departments = Department::all();
    }

    public function updatedEnvioType($value)
    {
        if ($value == 1) {
            $this->resetValidation([
                'department_id', 'city_id',  'address', 'references'
            ]);
        }
    }

    public function updatedDepartmentId($value)
    {
        $city = City::find($value);

        $this->shipping_cost = $city->cost;

        $this->cities = City::where('department_id', $value)->get();

        $this->reset(['city_id']);
    }

    public function create_order()
    {
        $rules = $this->rules;

        if ($this->envio_type == 2) {
            $rules['department_id'] = 'required';
            $rules['city_id'] = 'required';
            $rules['address'] = 'required';
            $rules['references'] = 'required';
        }

        $this->validate($rules);

        $order = new Order();

        $order->user_id = auth()->user()->id;
        $order->contact = $this->contact;
        $order->phone = $this->phone;
        $order->envio_type = $this->envio_type;
        $order->shipping_cost = 0;
        $order->total = $this->shipping_cost + Cart::subtotal();
        $order->content = Cart::content();

        if ($this->envio_type == 2) {
            $order->shipping_cost = $this->shipping_cost;
            /* $order->department_id = $this->department_id;
            $order->city_id = $this->city_id;
            $order->district_id = $this->district_id;
            $order->address = $this->address;
            $order->references = $this->references; */
            $order->envio = json_encode([
                'department' => Department::find($this->department_id)->name,
                'city' => City::find($this->city_id)->name,
                'address' => $this->address,
                'references' => $this->references
            ]);
        }

        $order->save();

        foreach (Cart::content() as $item) {
            discount($item);
        }

        Cart::destroy();

        return redirect()->route('orders.payment', $order);
    }

    public function render()
    {
        return view('livewire.create-order');
    }
}
