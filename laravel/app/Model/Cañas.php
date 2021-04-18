<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cañas extends Model
{
    //

    protected $table = 'reserva_hoteles';
    public $timestamps = false;
    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'Nombre',
        'Localidad',
        'Precio',
        'Nombre_Reserva',
        'Fecha_Ingreso',
        'Total_Dias',
        'Serv_Extra',
        'Precio_Final'
    ];
}
