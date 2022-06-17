<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albur;
use App\Models\User;
use App\Models\Tipo;

class AlbursController extends Controller
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

    public function conocermas(){
        $tipos=Tipo::all();
        return view('alburs.conocermas',['tipos'=>$tipos]);
    }

    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
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
    }

    public function admininicio(){

        $periodo = Tipo::All()->last()->tipo_id;
        $periodo2 = Tipo::All()->last()->id;
    
        $tallers = Taller::where("periodo_id","=",$periodo2)->get();

    
        //cargar cuantos talleres existen
        $data = [];
        foreach($tallers as $taller){
            $data[] = $taller->taller;
        }

        //contar numero de alumnos registrados  con cultura etnia en cada taller
        $data2 = [];
        foreach($tallers as $taller){
            $data2[]+= Alumno::where("taller_id","=",$taller->id)
                                ->where("culturaetnia","=",1)
                                ->count();
        }

        //contar numero de alumnos registrados con discapacidad en cada taller
        $data3 = [];
        foreach($tallers as $taller){
            $data3[]+= Alumno::where("taller_id","=",$taller->id)
                                ->where("discapacidad","=",1)
                                ->count();
        }

        //contar genero en cada taller
        $mujeres = [];
        $hombres = [];
        foreach($tallers as $taller){
            $mujeres[]+= Alumno::where("taller_id","=",$taller->id)
                                ->where("sexo","=",2)
                                ->count();

            $hombres[]+= Alumno::where("taller_id","=",$taller->id)
                                ->where("sexo","=",1)
                                ->count();
        }

        
        return view('gestionadmin' , ['data' => $data, 'data2' => $data2, 'data3' => $data3, 'tallers' => $tallers, 'h'=> $hombres, 'm'=> $mujeres]);
    }
}
