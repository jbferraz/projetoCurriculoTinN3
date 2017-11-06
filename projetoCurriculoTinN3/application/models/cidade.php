<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cidades extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($p) {
        return $this->db->insert('cidades', $p);
    }

    function deletar($id) {
        $this->db->where('idcidade', $id);
        return $this->db->delete('cidades');
    }

    function listarPessoas() {
        $lista = $this->db->get('cidades');
        return $lista->result();
    }

    function editar($id) {
        $this->db->where('idcidades', $id);
        $result = $this->db->get('cidades');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('idcidades', $data['idcidades']);
        $this->db->set($data);
        return $this->db->update('cidades');
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

