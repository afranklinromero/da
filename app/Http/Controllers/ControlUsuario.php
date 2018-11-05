<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlUsuario extends Controller
{
    public function home()
    {
        return 'home';
    }
    
    public function usuario()
    {
        if (request()->has('empty')){
            $users = [];

        }else{
            $users = [
                'joel',
                'eli',
                'pedro',
                'jose',
            ];
        }
        
        $title = 'Lista de Usuarios';
        return view ('usuarios',compact('title','users'));
    }
}
