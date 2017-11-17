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
        $fields = array
        (
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone'),
            'dtNascimento' => $this->input->post('dtNascimento'),
            'sexo' => $this->input->post('sexo'),
            'email' => $this->input->post('email'),
            'descricao' => $this->input->post('descricao'),
            'estadocivil' => $this->input->post('estadocivil'),
            'cpf' => $this->input->post('cpf'),
            'Cidades_id' => $this->input->post('cidades'),
            'Cargos_id' =>$this->input->post('cargos'),
        );
        
		$result = $this->ps_m->submit($fields);
		redirect(base_url('pessoas/be_index'));
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
        $fields = array
        (
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone'),
            'dtNascimento' => $this->input->post('dtNascimento'),
            'sexo' => $this->input->post('sexo'),
            'email' => $this->input->post('email'),
            'descricao' => $this->input->post('descricao'),
            'estadocivil' => $this->input->post('estadocivil'),
            'cpf' => $this->input->post('cpf'),
            'Cidades_id' => $this->input->post('cidades'),
            'Cargos_id' =>$this->input->post('cargos'),
        );

		$id = $this->input->post('txt_hidden_id');
		$result = $this->ps_m->update($id, $fields);

		redirect(base_url('pessoas/be_index'));
	}

    function delete($id)
	{
		$result = $this->ps_m->delete($id);
		
		redirect(base_url('pessoas/be_index'));
	}



    public function index() {
        $this->load->view('template/header');
        $data['titulo'] = "Cadastro de Pessoas";
        $this->load->view('pessoa', $data);
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
