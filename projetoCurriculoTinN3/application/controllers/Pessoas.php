<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Pessoas_model', 'ps_m');
        $this->load->model('Cargos_model', 'cg_m');
        $this->load->model('Cidades_model', 'cd_m');
    }

    function be_index()
	{
        $data['pessoas'] = $this->ps_m->getPessoas();
        $data['cargos'] = $this->cg_m->getCargos();
        $data['cidades'] = $this->cd_m->getCidades();
        
        $this->load->view('backend_tests/pessoas/index', $data);
    }
    
    function be_add()
	{
		$data['pessoas'] = $this->ps_m->getPessoas();
        $data['cargos'] = $this->cg_m->getCargos();
        $data['cidades'] = $this->cd_m->getCidades();

		$this->load->view('backend_tests/pessoas/add', $data);
	}

    function submit()
	{
        $this->load->helper('duplicated');
        $pessoas = $this->ps_m->getPessoas();
        
        $fields = getPostPessoas($this);

        $test = duplicatedPessoas($pessoas, $fields, null);
        if ($test) {
            //redirect(base_url('pessoas/be_add/'.$id));
            $this->session->set_flashdata('error_msg', 'Cadastro já existe');
            redirect(base_url('pessoas'));
        } else {
            $result = $this->ps_m->submit($fields);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Cadastro inserido com sucesso');
                //echo "it's true";
            } else {
                $this->session->set_flashdata('error_msg', 'Erro ao inserir');
                //echo "it's false";
            }
            redirect(base_url('pessoas'));
        }
	}

    function be_edit($id)
	{	
		$data['pessoas'] = $this->ps_m->getPessoasById($id);
        $data['cargos'] = $this->cg_m->getCargos();
        $data['cidades'] = $this->cd_m->getCidades();

		$this->load->view('backend_tests/pessoas/edit', $data);
	}

    function update()
	{
        $this->load->helper('duplicated');
        $pessoas = $this->ps_m->getPessoas();

        $fields = getPostPessoas($this);
        $id = $this->input->post('hidden_id');

        $test = duplicatedPessoas($pessoas, $fields, $id);
        if ($test) {
            $this->session->set_flashdata('error_msg', 'Cadastro já existe');
            redirect(base_url('pessoas/edit/'.$id));
        } else {
            $result = $this->ps_m->update($id, $fields);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Cadastro atualizado com sucesso');
                //echo "it's true";
            } else {
                $this->session->set_flashdata('error_msg', 'Erro ao atualizar');
                //echo "it's false";
            }
            redirect(base_url('pessoas'));
        }
	}

    function delete($id)
	{
		$result = $this->ps_m->delete($id);
		if ($result) {
            $this->session->set_flashdata('success_msg', 'Cadastro excluído com sucesso');
            //echo "it's true";
        } else {
            $this->session->set_flashdata('error_msg', 'Erro ao excluir');
            //echo "it's false";
        }
		redirect(base_url('pessoas'));
	}


    public function index() {
        $data['pessoas'] = $this->ps_m->getPessoas();
        $data['cargos'] = $this->cg_m->getCargos();
        $data['cidades'] = $this->cd_m->getCidades();

        $data['titulo'] = "Cadastro de Pessoas";

        $this->load->view('template/header');
        $this->load->view('pessoa', $data);
        $this->load->view('template/footer');
    }

    function edit($id)
	{	
		$data['pessoas'] = $this->ps_m->getPessoasById($id);
        $data['cargos'] = $this->cg_m->getCargos();
        $data['cidades'] = $this->cd_m->getCidades();

        $data['titulo'] = "Editor de Pessoas";

        $this->load->view('template/header');
        $this->load->view('editarpessoa', $data);
        $this->load->view('template/footer');
	}

    /*
    function inserir() {
        // Recebe os dados do formulário (visão)
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

        // Chama a função inserir do modelo
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
    */
}
