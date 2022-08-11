<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;

class AddCartItemColor extends Component
{
    //inicializando el contador
    public $product;
    public $colors;
    public $color_id = "";

    public $qty = 1;
    public $quantity = 0;

    public $options = [
        'size_id' => null
    ];


    //recuperar la  propiedad colors
    public function mount()
    {
        //cantidad del producto
        $this->colors = $this->product->colors;
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }


    //se ejecuta cada ves que se cambie la propiedad color_id
    public function updatedColorId($value)
    {
        $color = $this->product->colors->find($value);
        $this->quantity = qty_available($this->product->id, $color->id);
        $this->options['color'] = $color->name;
        $this->options['color_id'] = $color->id;
    }


    //agregar al carrito
    public function addItem()
    {
        Cart::add([ 'id' => $this->product->id,
                    'name' => $this->product->name,
                    'qty' => $this->qty,
                    'price' => $this->product->price,
                    'weight' => 550,
                    'options' => $this->options
                ]);

        $this->quantity = qty_available($this->product->id, $this->color_id);

        $this->reset('qty');

        $this->emitTo('dropdown-cart', 'render');
    }

    // aumentar y disminuir el boton
    public function decrement()
    {
        $this->qty = $this->qty - 1;
    }

    public function increment()
    {
        $this->qty = $this->qty + 1;
    }



    public function render()
    {
        return view('livewire.add-cart-item-color');
    }
}
