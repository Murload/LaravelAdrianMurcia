<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    function mostrar($nombre = null){
    if ($nombre == null) {
        return 'Debe ingresar usuario';
        }
        return 'Nombre de Usuario = '.$nombre;
    }
}
