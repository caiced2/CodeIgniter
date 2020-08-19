<?php namespace App\Controllers;

class Prueba extends BaseController
{
	public function index()
	{
        //return view('welcome_message');
        echo "Esta es la funcion index";
	}

	//--------------------------------------------------------------------


    public function test()
    { 
        echo "Esta es la funcion test";
    }

    public function test2()
    { 
        echo "Esta es la funcion test2";
    }
}