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
            redirect(base_url('cargos'));
        } else {
            $result = $this->cg_m->submit($fields);
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
            redirect(base_url('cargos/be_edit/'.$id));
        } else {
            $result = $this->cg_m->update($id, $fields);
            redirect(base_url('cargos/be_index'));
        }
	}

    function delete($id)
	{
		$result = $this->cg_m->delete($id);
		
		redirect(base_url('cargos/be_index'));
    }
    
    public function index() {
        $data['cargos'] = $this->cg_m->getCargos();

        $data['titulo'] = "Cadastro de Cargos";

        $this->load->view('template/header');
        $this->load->view('cargo', $data);
        $this->load->view('template/footer');
    }
}
