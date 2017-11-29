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
                <?php echo form_open('cargos/update'); ?>
                 <input type="hidden" name="hidden_id" value="<?php echo $cargos->idcargos ?>">
                <fieldset>
                    <legend><strong>Editar Cargo</strong></legend>
                </fieldset>
                <label>Cargo </label>
                <input class="form-control" type="text" name="cargos" required="required" value="<?php echo $cargos->cargos ?>" placeholder="Cargo" maxlength="20">

                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Atualizar </button>
                <button class="btn btn-danger btn-block" type="reset">Limpar </button>
                <a href="<?php echo base_url('home') ?>" class="btn btn-warning btn-block" type="reset">Voltar </a>
                 

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

