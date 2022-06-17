<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Albur;
use App\Models\Tipo;

class CrearAlbur extends Component
{
    public $titulo;
    public $descripcion;
    public $tipo_id;

    public $open=false;

    //protected $listeners = ['editarUser' => 'abrirModal'];

    protected $rules = [
        'titulo' => 'required',
        'descripcion' => 'required',
        'tipo_id' =>'required'
    ];

    public function abrirModal(){
        $this->open=true;
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
            'tipo_id' => $this->tipo_id
        ]);

        $this->cerrarModal1();
        $this->limpiar();

    }

    public function render()
    {
        return view('livewire.crear-albur');
    }
}
