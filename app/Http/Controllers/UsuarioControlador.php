<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;

class UsuarioControlador extends Controller
{
    public function store(Request $request){


    	$user = new User($request->all());
        $user ->id= $_POST['id']:
        $user->nombre= $_POST['nombre'];
    	$user->apellido= $_POST['apellido'];
    	$user->numero=$_POST['numero'];
    	$user->numero_romano=$_POST['numero_romano'];
    	$user->save();
         return view('welcome')->with('usuario',$user);
    	
    }

}