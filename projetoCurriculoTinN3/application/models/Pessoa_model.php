<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($p) {
        return $this->db->insert('pessoas', $p);
    }

    function deletar($id) {
        $this->db->where('idpessoas', $id);
        return $this->db->delete('pessoas');
    }

    function listarPessoas() {
        $lista = $this->db->get('pessoas');
        return $lista->result();
    }

    function editar($id) {
        $this->db->where('idpessoas', $id);
        $result = $this->db->get('pessoas');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('idpessoas', $data['idpessoas']);
        $this->db->set($data);
        return $this->db->update('pessoas');
    }

}