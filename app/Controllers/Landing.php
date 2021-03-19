<?php

namespace App\Controllers;

class Landing extends BaseController
{
	public function index()
	{
        $data['acessos'] = $this->getAcessos();
		return view('landing_page', $data);
	}

    public function getAcessos() {
        $acessosModel = model('acessosmodel');
        return $acessosModel->getAcessos();
    }
}
