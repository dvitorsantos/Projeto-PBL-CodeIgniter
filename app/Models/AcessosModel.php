<?php

namespace App\Models;

use CodeIgniter\Model;

class AcessosModel extends Model
{
    protected $db;

    function __construct() {
        $this->db = \Config\Database::connect();
    }

    function getAcessos() {
        $this->db = db_connect();
        $query = $this->db->query('SELECT acessos FROM `tb_acessos` WHERE 1');
        foreach ($query->getResult() as $row) {
            return $row->acessos;
        }
    }
    
    function updateAcessos() {
        $this->db = db_connect();
        $newAcesso = $this->getAcessos() + 1;
        $query = $this->db->query('UPDATE `tb_acessos` SET acessos = '.$newAcesso);
    }
}