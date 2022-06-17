<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Albur;
use Livewire\WithFileUploads;

class ShowAlbur extends Component
{
    use WithFileUploads;

    public $buscador="";
    public $alburs;
    public $abrir=false;

    public $delete_id;
    protected $listeners = ['deleteConfirmed'=>'deleteAlbur'];

    /*public function abrirEdit(){
        
        $this->abrir=true;
    }*/

    public function cerrarEdit(){
        $this->abrir=false;
    }

    public function mount(){
        $this->alburs=Albur::all();
    }

    public function buscar(){
        $this->alburs=Albur::where('titulo','like','%'.$this->buscador.'%')->get();
    }

    //PARTE DEL EDITAR ALBUR

    public function abrirEdit($id){
        $this->abrir=true;
        $alburs = Albur::Where ('id',$id)->first();
        
        $this->titulo=$alburs->titulo;
        $this->descripcion=$alburs->descripcion;
        $this->tipo_id=$alburs->tipo_id;
        $this->user_id=$alburs->id;
    }

    public function mountEdit(){
        $this->alburs=Auth()->user();
        $this->titulo=$this->alburs->titulo;
        $this->descripcion=$this->alburs->descripcion;
        $this->tipo_id=$this->alburs->tipo_id;
    }


    //funcion para guardar los datos
    public function guardarAlbur(){
        //valida que el email sea único excepto para el usuario mismo que lo tiene registrado
        $this->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'tipo_id' => 'required',
        ]);
        Albur::find($this->user_id)->update([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'tipo_id' => $this->tipo_id,
        ]);
        /*$this->alburs->titulo=$this->titulo;
        $this->alburs->descripcion=$this->descripcion;
        $this->alburs->tipo_id=$this->tipo_id;*/
        //$this->alburs->save();
        
        $this->abrir=false;
        $this->dispatchBrowserEvent('editarExitoso');
    }

    public function deleteConfirmation($id){
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteAlbur(){
        $alburs = Albur::Where ('id', $this->delete_id)->first();
        $alburs->delete();

        $this->dispatchBrowserEvent('deleteAlbur');
    }

    public function render()
    {
        return view('livewire.show-albur');
    }
}
