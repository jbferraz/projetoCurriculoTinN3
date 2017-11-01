<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('template/header');
        $dados['completo'] = "Projeto Curriculo";
        $this->load->view('Home',$dados);
        $this->load->view('template/footer');
    }

}
