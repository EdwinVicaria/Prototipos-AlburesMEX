<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ShowUsers extends Component
{

    public $buscador="";
    public $users;

    public function mount(){
        $this->users=User::all();
    }

    public function buscar(){
        $this->users=User::where('name','like','%'.$this->buscador.'%')->get();
    }
    public function render()
    {
        return view('livewire.show-users');
    }
}
