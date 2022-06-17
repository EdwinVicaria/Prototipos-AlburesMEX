<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Albur;
use App\Models\Tipo;
use App\Models\User;

class CrearAlbur extends Component
{
    public $titulo;
    public $descripcion;
    public $tipo_id;
    public $user_id;
    public $valor;
    

    public $open=false;

    //protected $listeners = ['editarUser' => 'abrirModal'];

    protected $rules = [
        'titulo' => 'required',
        'descripcion' => 'required',
        'tipo_id' =>'required'
    ];

    public function abrirModal(){
        $this->open=true;
        $valor=User::all()->where('id',Auth()->user()->id)->first()->id;
        $this->valor=$valor;
    }

    public function cerrarModal(){
        $this->emit('cerrar');
    }

    public function cerrarModal1(){
        $this->open=false;
    }

    public function limpiar(){
        $this->titulo="";
        $this->descripcion="";
        $this->tipo_id="";
    }

    public function submit()
    {
        $this->validate();
        Albur::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'tipo_id' => $this->tipo_id,
            'user_id' => $this->valor,
        ]);

        $this->cerrarModal1();
        $this->limpiar();

    }

    public function render()
    {
        return view('livewire.crear-albur');
    }
}
