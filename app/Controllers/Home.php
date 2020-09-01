<?php namespace App\Controllers;


class Home extends BaseController
{
	public function index()
	{
		echo view('login_adm');
	
						
	}
	public function sistema()
	{
		echo view('sistema/index');
						
	}
	public function Prueba()
	{
		echo view ('cargar_adm');
	}
}
