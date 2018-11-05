<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PruebaUsuario extends TestCase
{
    /**
     * A basic test example.
     *
     * prueba
     */
    function lista_de_usuarios()
    {
        $this->get('/usuarioss')
            ->assertStatus(200)
            ->assertSee ('Usuarios');
    }


}
