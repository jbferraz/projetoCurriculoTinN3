<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cidades_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getCidades()
    {
        $this->db->order_by('cidades', 'asc');
        $query = $this->db->get('cidades');
        
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    /*
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
    */
}
