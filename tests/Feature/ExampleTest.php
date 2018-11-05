<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/usuarios');
        $response->assertStatus(200);
       
    }
    public function lista_de_usuarios()
    {
        $this->get('/usuarioss')
            ->assertStatus(200)
            ->assertSee ('Usuarisos');
    }

}
