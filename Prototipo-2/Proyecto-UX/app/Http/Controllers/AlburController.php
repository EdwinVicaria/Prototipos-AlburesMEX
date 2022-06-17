<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albur;
use App\Models\User;
use App\Models\Tipo;

class AlburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $alburs=Albur::all();
        return view('alburs.index',['alburs'=>$alburs]);
    }

    
/*
    public function conocermas(){
        $tipos=Tipo::all();
        return view('alburs.conocermas',['tipos'=>$tipos]);
    }
*/
    public function propios(){
        $alburs=Albur::all();
        return view('alburs.propios',['alburs'=>$alburs]);
    }
/*
    public function users(){
        $users=User::all();
        return view('alburs.propios',['users'=>$users]);
    }
*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alburs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
        $validated = $request->validate([
            'titulo'=>'required',
            'descripcion'=> 'required',
            'tipo_id'=>'required',
        ]);

        //
        $alburs= new Albur();
        $alburs->user_id = Auth()->User()->id;
        $alburs->titulo=$request->titulo;
        $alburs->descripcion=$request->descripcion;
        $alburs->tipo_id=$request->tipo_id;
        

        $alburs->save();

        return redirect()->route('alburs.index')->with('mensaje','¡¡¡¡Nuevo albur registrado con exito!!!!');
        //
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Albur $id)
    {
        //
        if($request->user()->cannot('update',$id)){
            abort(403);
        }
        //return view('alburs.edit',['alburs'=>$alburs]);
        //dd($alburs);
        //$alburs=Albur::FindOrFail($id);
        //return $alburs;
        //return redirect()->route('alburs.edit');
        //return view('alburs.edit',['alburs'=>$alburs]);
        return view('alburs.edit',compact('alburs'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $alburs=Albur::FindOrFail($id);
        $alburs->user_id = Auth()->User()->id;
        $alburs->titulo=$request->titulo;
        $alburs->descripcion=$request->descripcion;
        $alburs->tipo_id=$request->tipo_id;

        $alburs->save();

        return redirect()->route('propios')->with('mensaje','¡¡¡¡Albur editado con exito!!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $alburs=Albur::find($id);
        $alburs->delete();
        return redirect()->route('propios')->with('mensaje','¡¡¡¡Albur eliminado con exito!!!!');
    }

    public function tipo(){
        $tipo=Tipo::all();
        return view('tipo',['tipo'=>$tipo]);
    }
}
