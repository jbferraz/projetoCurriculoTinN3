<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidade extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Pessoa_model', 'pessoa');
    }

    public function index() {
        $this->load->view('template/header');
        $dados['titulo'] = "Cadastro de Pessoas";
        $this->load->view('pessoa', $dados);
        $this->load->view('template/footer');
    }

    function inserir() {
        /* Recebe os dados do formulário (visão) */
   
        $data['cidades'] = $this->input->post('cidade');

        /* Chama a função inserir do modelo */
        $result = $this->model->inserir($data);
        if ($result == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('pessoa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('pessoa');
        }
    }

    function excluir($id) {
        $result = $this->model->deletar($id);
        if ($result == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('pessoa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('pessoa');
        }
    }

    function editar_pessoas($id) {
        $data['pessoa_editar'] = $this->model->editar($id);
        $this->load->view('template/header');
        $this->load->view('editar_pessoa', $data);
        $this->load->view('template/footer');
    }

    function atualizar_pessoa() {
        $data['id'] = $this->input->post('id');
        $data['cidades'] = $this->input->post('cidades');

       
        if ($this->model->atualizar($data) == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('pessoa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('pessoa');
        }
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

