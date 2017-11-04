<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Pessoa_model', 'model');
    }

    public function index() {
        $this->load->view('template/header');
        $data['titulo'] = "Cadastro de Pessoas";
        $this->load->view('pessoa', $data);
        $this->load->view('template/footer');
    }

    function inserir() {
        /* Recebe os dados do formulário (visão) */
        $data['nome'] = $this->input->post('nome');
        $data['telefone'] = $this->input->post('telefone');
        $data['dtNascimento'] = $this->input->post('dtNascimento');
        $data['sexo'] = $this->input->post('sexo');
        $data['email'] = $this->input->post('email');
        $data['descricao'] = $this->input->post('descricao');
        $data['estadocivil'] = $this->input->post('estadocivil');
        $data['cpf'] = $this->input->post('cpf');
        $data['Cidades_id'] = $this->input->post('Cidades_id');
        $data['Cargos_id'] = $this->input->post('Cargos_id');

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
        $data['idpesoas'] = $this->input->post('idpessoas');
        $data['nome'] = $this->input->post('nome');
        $data['telefone'] = $this->input->post('telefone');
        $data['dtNascimento'] = $this->input->post('dtNascimento');
        $data['sexo'] = $this->input->post('sexo');
        $data['email'] = $this->input->post('email');
        $data['descricao'] = $this->input->post('descricao');
        $data['estadocivil'] = $this->input->post('estadocivil');
        $data['cpf'] = $this->input->post('cpf');
        $data['Cidades_id'] = $this->input->post('Cidades_id');
        $data['Cargos_id'] = $this->input->post('Cargos_id');

        if ($this->model->atualizar($data) == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('pessoa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('pessoa');
        }
    }

}
