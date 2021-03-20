<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index() {
		$this->updateAcessos();
		return redirect()->to('public/index.php/home/inicio'); 
	}
	
	public function inicio() {
		echo view('home/header');
		echo 'Inicio';
	}
	
	public function pesquisa_popular() {
		echo view('home/header');
		echo 'Pesquisa Popular';
	}

	public function reflexao() {
		echo view('home/header');
		echo 'Reflexão';
	}
	
	public function comentarios() {
		echo view('home/header');
		echo 'Comentários';
	}
	
	public function creditos() {
		echo view('home/header');
		echo 'Creditos';
	}

	public function updateAcessos() {
		$acessosModel = model('acessosmodel');
		$acessosModel->updateAcessos();
	}
}
