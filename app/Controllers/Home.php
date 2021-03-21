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
		$comentarioModel = model('comentariomodel');
		$data['comentarios'] = $comentarioModel->getAllComentario();
		echo view('home/header');
		echo view('home/comentarios', $data);
	}

	public function adicionar_comentario() {
		if ($this->request->getMethod() === 'post') {
			$comentarioModel = model('comentariomodel');

			$nome = $this->request->getPost('nome');
			$comentario = $this->request->getPost('comentario');

			$comentarioModel->insertComentario($nome, $comentario);
			return redirect()->to('../public/index.php/home/comentarios'); 
		}
    	else {
			echo view('home/header');
			echo view('home/adicionar_comentario');
		}
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
