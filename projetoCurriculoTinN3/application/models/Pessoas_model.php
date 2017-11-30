<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getPessoas()
    {
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get('pessoas');
        
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    function getAllPessoas()
    {
        /*
        $this->db->order_by('nome', 'asc');
        $this->db->from('pessoas');
        $this->db->join('cidades', 'cidades.idcidades = pessoas.Cidades_id');
        $this->db->join('cargos', 'cargos.idcargos = pessoas.Cargos_id');

        $query = $this->db->get();
        
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
        */
        
        $this->db->order_by('nome', 'asc');
        $this->db->select('pessoas.*, cidades.cidades, cargos.cargos');
        $this->db->from('pessoas, cidades, cargos');
        $this->db->where('cidades.idcidades = pessoas.Cidades_id');
        $this->db->where('cargos.idcargos = pessoas.Cargos_id');

        $query = $this->db->get();

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    function getPessoasById($id)
    {
        $this->db->where('idpessoas', $id);
        $query = $this->db->get('pessoas');
        
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return false;
    }

    function submit($fields)
    {
        $this->db->insert('pessoas', $fields);
        
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function update($id, $fields)
    {
        $this->db->where('idpessoas', $id);
        $this->db->update('pessoas', $fields);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function delete($id)
    {
        $this->db->where('idpessoas', $id);
        $this->db->delete('pessoas');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    /*
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
    */
}