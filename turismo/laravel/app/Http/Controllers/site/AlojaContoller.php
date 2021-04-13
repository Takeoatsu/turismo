<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Alojamiento;

class AlojaContoller extends Controller
{
    public function Mostrar(){
        $var = Alojamiento::get();
        dd($var);
        //return 'Hi';
    }
}


