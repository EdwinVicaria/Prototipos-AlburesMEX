<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    //
    public function tipo(){
        $tipo=Tipo::all();
        //dd($reticula);
        return view('alburs.create', ['tipo'=>$tipo]);
    }

}
