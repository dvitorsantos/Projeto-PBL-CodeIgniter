<?php

namespace App\Models;

use CodeIgniter\Model;

class AcessosModel extends Model
{
    protected $db;

    function __construct() {
        $this->db = \Config\Database::connect();
    }

    function getAllComentario() {
        $this->db = db_connect();
        $query = $this->db->query('SELECT * FROM `tb_comentario`');
        $result = [];
        foreach ($query->getResult() as $row) {
                array_push($result, $row->nome, $row->comentario);
            }
        return $result;
    }

    function insertComentario($nome, $comentario) {
        $this->db = db_connect();
        return $this->db->query("INSERT INTO `tb_comentario` (`id`, `nome`, `comentario`) VALUES (NULL, '".$nome."', '".$comentario."');");
    }
}