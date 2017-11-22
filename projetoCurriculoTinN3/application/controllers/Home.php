<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['completo'] = "Projeto Curriculo";

        $this->load->view('template/header');
        $this->load->view('home', $data);
        $this->load->view('template/footer');
    }
    
    function be_index() { 
        $this->load->view('backend_tests/home');
    }
}
