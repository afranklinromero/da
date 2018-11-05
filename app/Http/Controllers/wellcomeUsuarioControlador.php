<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wellcomeUsuarioControlador extends Controller
{
    public function __invoke($name, $apodo = null)
    {
        $name = ucfirst($name);

        if($apodo){
            return "bienvenido {$name}, tu apodo es {$apodo}";
        }else{
            return "Bienvenido {$name}";      
          }
    }
}
