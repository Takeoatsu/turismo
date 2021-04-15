<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Alojamiento;

class AlojaContoller extends Controller
{
    public function Combo ( Request $request, $id){

        $alojamiento = Alojamiento::where('id', $id)->first();

        $alojamiento -> Alojamiento = $request->get('Nombre');
        $alojamiento -> Alojamiento = $request->get('Localidad');
        $alojamiento -> Alojamiento = $request->get('Precio');

        $alojamiento -> save();

        return redirect('/cañas');
    }
    
}


