<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function getPostPessoas($context) {
    $fields = array
    (
        /*

        name="" id=""
        action="<?php echo base_url('pessoas/submit') ?>"
        
        arrays:
            $cidades
            $cargos

        */
        'nome' => $context->input->post('nome'), 
        'telefone' => $context->input->post('telefone'),
        'dtNascimento' => $context->input->post('dtNascimento'),
        'sexo' => $context->input->post('sexo'),
        'email' => $context->input->post('email'),
        'descricao' => $context->input->post('descricao'),
        'estadocivil' => $context->input->post('estadocivil'),
        'cpf' => $context->input->post('cpf'),
        'Cidades_id' => $context->input->post('cidades'),
        'Cargos_id' => $context->input->post('cargos')
    );
    return $fields;
}

function duplicatedPessoas($fromDb, $fromPost, $id) {
    
    foreach ($fromDb as $db) {
        if (!($id === $db->idpessoas)) {
            if 
            (
                $db->cpf == 
                $fromPost['cpf'] ||

                $db->telefone == 
                $fromPost['telefone'] ||

                $db->email == 
                $fromPost['email']
            )
            return true;
        }
    }
    return false;
}

function getPostCargos($context) {
    $fields = array
    (
        /*

        name="" id=""
        action="<?php echo base_url('cargos/submit') ?>"
            
        */
        'cargos' => $context->input->post('cargos')
    );
    return $fields;
}

function duplicatedCargos($fromDb, $fromPost, $id) {
    
    foreach ($fromDb as $db) {
        if (!($id === $db->idcargos)) {
            if 
            (
                $db->cargos == 
                $fromPost['cargos']
            )
            return true;
        }
    }
    return false;
}

function getPostCidades($context) {
    $fields = array
    (
        /*

        name="" id=""
        action="<?php echo base_url('cidades/submit') ?>"
            
        */
        'cidades' => $context->input->post('cidades')
    );
    return $fields;
}

function duplicatedCidades($fromDb, $fromPost, $id) {
    
    foreach ($fromDb as $db) {
        if (!($id === $db->idcidades)) {
            if 
            (
                $db->cidades == 
                $fromPost['cidades']
            )
            return true;
        }
    }
    return false;
}