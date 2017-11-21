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

    function getCidadesById($id)
    {
        $this->db->where('idcidades', $id);
        $query = $this->db->get('cidades');
        
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return false;
    }

    function submit($fields)
    {
        $this->db->insert('cidades', $fields);
        
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function update($id, $fields)
    {
        $this->db->where('idcidades', $id);
        $this->db->update('cidades', $fields);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function delete($id)
    {
        $this->db->where('idcidades', $id);
        $this->db->delete('cidades');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
