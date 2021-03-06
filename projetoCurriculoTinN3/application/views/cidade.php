<div>
    <div class="container">
    <br><br><br><br>
    <?php 
    if ($this->session->flashdata('success_msg')) {
    ?>
        <div class="alert alert-success" style="width: 50%; margin: auto">
            <?php echo $this->session->flashdata('success_msg') ?>
        </div>
    <?php 
    } 
    if ($this->session->flashdata('error_msg')) {
    ?>
        <div class="alert alert-danger" style="width: 50%; margin: auto">
            <?php echo $this->session->flashdata('error_msg') ?>
        </div>
    <?php 
    } 
    ?>
        <div class="row" style="padding-top:18px;">
            <div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0">
                <?php echo form_open('cidades/submit'); ?>
                <fieldset>
                    <legend><strong>Cadastro de Cidades</strong></legend>
                </fieldset>
                <label>Cidade </label>
                <input class="form-control" type="text" name="cidades" required="required" placeholder="Cidade" maxlength="20">

                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Salvar </button>
                <button class="btn btn-danger btn-block" type="reset">Limpar </button>
                <a href="<?php echo base_url('home') ?>" class="btn btn-warning btn-block" type="reset">Voltar </a>
                
                <a id="btn-lista" class="btn btn-info btn-block"><i class="glyphicon glyphicon-th-list"></i>&nbsp;Listar</a>
                <?php echo form_close(); ?>
                <br>

            </div>
        </div>
    </div>
</div>
<!-- Listagem de Paises -->
<div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0"></div>
<div id="div-lista" class="hide col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0"
    style="margin-right: 100%">
    <div class="">
        <h2 class="">Lista de Cidades</h2>
    </div>
    <div class="">
        <table class="table">
            <thead >
                <tr>
                    
                    <th scope="col">Cidade</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
           
            <tbody>
                <?php foreach ($cidades as $u):  ?>
                    <tr>
                        <td><?php echo $u->cidades; ?></td>
                        
                        <td><a  href="<?php echo base_url('cidades/delete/'.$u->idcidades) ?>">Excluir </a> 
                             <a  href="<?php echo base_url('cidades/edit/' . $u->idcidades) ?>">Editar </a>
                        </td>
                        
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>