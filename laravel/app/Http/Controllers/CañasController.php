<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cañas;

class CañasController extends Controller
{    


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
    public function index()
    {
        $precio = 10000;
        return view('cañas',compact('precio'));        
    }

    public function store(Request $request){
       
        $id=$request->get('id');
        $cañas = new Cañas([
            'id'=>$request->get('id'),
            'Nombre'=>$request->get('Nombre'),
            'Localidad'=>$request->get('Localidad'),
            'Precio'=>$request->get('Precio'),
            'Nombre_Reserva'=>$request->get('Nombre_Reserva'),
            'Fecha_Ingreso'=>$request->get('Fecha_Ingreso'),
            'Total_Dias'=>$request->get('Total_Dias'),
            'Serv_Extra'=>$request->get('Serv_Extra'),
            'Valor_Extra'=>$request->get('Valor_Extra'),
            'Precio_Final'=>$request->get('Precio_Final')
        ]);
        $cañas -> save();
        return view("/Cañas");
    } 
}
