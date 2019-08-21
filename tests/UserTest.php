<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testBackEndAgregar(){

    $usuario = new App\Usuario();
    $usuario-> id_usuario ='2';
    $usuario-> nombre ='Maria';
    $usuario-> apellido ='Hernandez';
   	$usuario-> telefono ='123';
    $usuario-> direccion = 'Calarca';
    $usuario->save();

  	$this->seeInDatabase('usuario', ['id_usuario' => '2']);

	}
  

}
