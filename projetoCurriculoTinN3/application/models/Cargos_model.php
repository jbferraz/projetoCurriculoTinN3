<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getCargos()
    {
        $this->db->order_by('cargos', 'asc');
        $query = $this->db->get('cargos');
        
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    function getCargosById($id)
    {
        $this->db->where('idcargos', $id);
        $query = $this->db->get('cargos');
        
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return false;
    }

    function submit($fields)
    {
        $this->db->insert('cargos', $fields);
        
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function update($id, $fields)
    {
        $this->db->where('idcargos', $id);
        $this->db->update('cargos', $fields);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function delete($id)
    {
        $this->db->where('idcargos', $id);
        $this->db->delete('cargos');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}