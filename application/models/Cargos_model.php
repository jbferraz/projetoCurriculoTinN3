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
}