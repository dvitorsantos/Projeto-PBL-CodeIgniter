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
        $query = $this->db->query('SELECT * FROM `tb_comentario` order by date(date) desc, time desc limit 10');
        $result = [];
        foreach ($query->getResult() as $row) {
                $timestamp = strtotime($row->date);
                array_push($result, $row->nome, $row->comentario, substr($row->time, 0, -3), str_replace("-", "/", date("d-m-y", $timestamp)));
            }
        return $result;
    }

    function insertComentario($nome, $comentario) {
        $this->db = db_connect();
        return $this->db->query("INSERT INTO `tb_comentario` (`id`, `nome`, `comentario`) VALUES (NULL, '".$nome."', '".$comentario."');");
    }
}