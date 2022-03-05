<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryProducts extends Component
{
    //recibiendo la  informacion de la categoria
    public $category;

    //inicalizando un array vacio
    public $products =[];

    //tiempo de carga cuando se ejecute la funcion
    public function loadPosts()
    {
        $this->products = $this->category->products()->where('status', 2)->take(15)->get();

        //eemitiendo evento hacia el script
        $this->emit('glider', $this->category->id);
    }

    public function render()
    {
        return view('livewire.category-products');
    }
}
