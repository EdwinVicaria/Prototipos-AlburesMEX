<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Albur;

class ShowAlbur extends Component
{
    public $buscador="";
    public $alburs;

    public function mount(){
        $this->alburs=Albur::all();
    }

    public function buscar(){
        $this->alburs=Albur::where('titulo','like','%'.$this->buscador.'%')->get();
    }

    public function render()
    {
        return view('livewire.show-albur');
    }
}
