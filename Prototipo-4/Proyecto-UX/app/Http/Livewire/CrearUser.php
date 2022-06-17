<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class CrearUser extends Component
{

    public $nombre,$email,$password='password';
    protected $rules = [
        'nombre'=>'required',
        'email'=>'required|email',
        'password'=>'required'
    ];
    public function guardarUser(){
        $this->validate();
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ]);
    }
    public function render()
    {
        return view('livewire.crear-user');
    }
}
