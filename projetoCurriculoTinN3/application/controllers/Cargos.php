<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Cargos_model', 'cg_m');
    }

    function be_index()
	{
        $data['cargos'] = $this->cg_m->getCargos();
        
        $this->load->view('backend_tests/cargos/index', $data);
    }
    
    function be_add()
	{   
		$this->load->view('backend_tests/cargos/add');
	}

    function submit()
	{
        $this->load->helper('duplicated');
        $cargos = $this->cg_m->getCargos();

        $fields = getPostCargos($this);

        $test = duplicatedCargos($cargos, $fields, null);
        if ($test) {
            //redirect(base_url('cargos/be_add/'.$id));
            $this->session->set_flashdata('error_msg', 'Cadastro já existe');
            redirect(base_url('cargos'));
        } else {
            $result = $this->cg_m->submit($fields);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Cadastro inserido com sucesso');
                //echo "it's true";
            } else {
                $this->session->set_flashdata('error_msg', 'Erro ao inserir');
                //echo "it's false";
            }
            redirect(base_url('cargos'));
        }
	}

    function be_edit($id)
	{	
		$data['cargos'] = $this->cg_m->getCargosById($id);

		$this->load->view('backend_tests/cargos/edit', $data);
	}

    function update()
	{
        $this->load->helper('duplicated');
        $cargos = $this->cg_m->getCargos();

        $fields = getPostCargos($this);  
        $id = $this->input->post('hidden_id');

        $test = duplicatedCargos($cargos, $fields, $id);
        if ($test) {
            redirect(base_url('cargos/edit/'.$id));
        } else {
            $result = $this->cg_m->update($id, $fields);
            redirect(base_url('cargos'));
        }
	}

    function delete($id)
	{
		$result = $this->cg_m->delete($id);
		if ($result) {
            $this->session->set_flashdata('success_msg', 'Cadastro excluído com sucesso');
            //echo "it's true";
        } else {
            $this->session->set_flashdata('error_msg', 'Erro ao excluir');
            //echo "it's false";
        }
		redirect(base_url('cargos'));
    }
    
    public function index() {
        $data['cargos'] = $this->cg_m->getCargos();

        $data['titulo'] = "Cadastro de Cargos";

        $this->load->view('template/header');
        $this->load->view('cargo', $data);
        $this->load->view('template/footer');
    }

    function edit($id)
	{	
		//$data['pessoas'] = $this->ps_m->getPessoasById($id);
        $data['cargos'] = $this->cg_m->getCargos();
        //$data['cidades'] = $this->cd_m->getCidades();

        $data['titulo'] = "Editor de Cargos";

        $this->load->view('template/header');
        $this->load->view('editarcargo', $data);
        $this->load->view('template/footer');
	}
}
