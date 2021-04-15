<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Alojamiento;

class CañasController extends Controller
{    

    public function index()
    {
        $precio = 10000;
        return view('cañas',compact('precio'));        
    }

    public function store(Request $request){
       
        $id=$request->get('id');
        $alojamiento = new Alojamiento([
            'id'=>$request->get('id'),
            'Nombre'=>$request->get('Nombre'),
            'Localidad'=>$request->get('Localidad'),
            'Precio'=>$request->get('Precio'),
            'Nombre_Reserva'=>$request->get('Nombre_Reserva'),
            'Fecha_Ingreso'=>$request->get('Fecha_Ingreso'),
            'Total_Dias'=>$request->get('Total_Dias'),
            'Serv_Extra'=>$request->get('Serv_Extra'),
            'Precio_Final'=>$request->get('Precio_Final')
        ]);
        $alojamiento -> save();
        return view("/cañas");
    } 
}
