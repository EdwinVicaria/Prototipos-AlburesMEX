<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Albur;

class EditarAlbur extends Component
{
    public $titulo;
    public $descripcion;
    public $tipo_id;

    public $open=false;

    //protected $listeners = ['editarUser' => 'abrirModal'];

    

    public function abrirModal(){
        
    }
    


/* 1. llamar a un metodo que abrira el update, se tendran 2 funciones para abrir modal  */


    public function cerrarModal1(){
        $this->open=false;
    }

    public function mount(){
        $this->alburs=Auth()->user();
        $this->titulo=$this->alburs->titulo;
        $this->descripcion=$this->alburs->descripcion;
        $this->tipo_id=$this->alburs->tipo_id;
    }

    public function abrirEdit($id){
        dd($id);
        $this->open=true;
        $alburs = Albur::Where ('id','=',$id)->first();
        $this->titulo=$albur->titulo;
        $this->descripcion=$albur->descripcion;
        $this->tipo_id=$albur->tipo_id;
        
    }


    //funcion para guardar los datos
    public function guardarAlbur(){
        //valida que el email sea único excepto para el usuario mismo que lo tiene registrado
        $this->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'tipo_id' => 'required',
        ]);
        $this->alburs->titulo=$this->titulo;
        $this->alburs->descripcion=$this->descripcion;
        $this->alburs->tipo_id=$this->tipo_id;
        $this->alburs->save();
        
        $this->open=false;
    }

// this user::where ('id','=',$id)->first();
    public function render()
    {
        return view('livewire.editar-albur');
    }
}
