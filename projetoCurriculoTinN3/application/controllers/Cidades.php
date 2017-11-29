<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cidades extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Cidades_model', 'cd_m');
    }

    function be_index()
	{
        $data['cidades'] = $this->cd_m->getCidades();
        
        $this->load->view('backend_tests/cidades/index', $data);
    }
    
    function be_add()
	{   
		$this->load->view('backend_tests/cidades/add');
	}

    function submit()
	{
        $this->load->helper('duplicated');
        $cidades = $this->cd_m->getCidades();

        $fields = getPostCidades($this);

        $test = duplicatedCidades($cidades, $fields, null);
        if ($test) {
            //redirect(base_url('cidades/be_add/'.$id));
            redirect(base_url('cidades'));
        } else {
            $result = $this->cd_m->submit($fields);
            redirect(base_url('cidades'));
        }
	}

    function be_edit($id)
	{	
		$data['cidades'] = $this->cd_m->getCidadesById($id);

		$this->load->view('backend_tests/cidades/edit', $data);
	}

    function update()
	{
        $this->load->helper('duplicated');
        $cidades = $this->cd_m->getCidades();

        $fields = getPostCidades($this);  
        $id = $this->input->post('hidden_id');

        $test = duplicatedCidades($cidades, $fields, $id);
        if ($test) {
            redirect(base_url('cidades/be_edit/'.$id));
        } else {
            $result = $this->cd_m->update($id, $fields);
            redirect(base_url('cidades/be_index'));
        }
	}

    function delete($id)
	{
		$result = $this->cd_m->delete($id);
		
		redirect(base_url('cidades'));
    }
    
    public function index() {
        $data['cidades'] = $this->cd_m->getCidades();

        $data['titulo'] = "Cadastro de Cidades";

        $this->load->view('template/header');
        $this->load->view('cidade', $data);
        $this->load->view('template/footer');
    }
}
