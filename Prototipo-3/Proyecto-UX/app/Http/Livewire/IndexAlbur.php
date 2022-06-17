<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Albur;
use App\Models\User;
use App\Models\Tipo;

class IndexAlbur extends Component
{
    public $alburs;

    public function mount(){
        $this->alburs=Albur::all();
    }

    public function render()
    {
        return view('livewire.index-albur');
    }
}
