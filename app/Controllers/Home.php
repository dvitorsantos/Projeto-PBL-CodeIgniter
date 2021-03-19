<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$this->updateAcessos();
		return view('home');
	}

	public function updateAcessos() {
		$acessosModel = model('acessosmodel');
		$acessosModel->updateAcessos();
	}
}
