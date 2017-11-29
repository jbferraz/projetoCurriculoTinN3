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
                <?php echo form_open('cidades/update'); ?>
                <input type="hidden" name="hidden_id" value="<?php echo $cidades->idcidades ?>">
                <fieldset>
                    <legend><strong>Editar Cidade</strong></legend>
                </fieldset>
                <label>Cidade </label>
                <input class="form-control" type="text" name="cidades" required="required" value="<?php echo $cidades->cidades ?>" placeholder="Cidade" maxlength="20">

                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Atualizar </button>
                <button class="btn btn-danger btn-block" type="reset">Limpar </button>
                <a href="<?php echo base_url('home') ?>" class="btn btn-warning btn-block" type="reset">Voltar </a>
                
                
                <?php echo form_close(); ?>
                <br>

            </div>
        </div>
    </div>
</div>
