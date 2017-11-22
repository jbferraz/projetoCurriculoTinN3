<div>
    <div class="container">
        <div class="row" style="padding-top:18px;">
            <div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0">
                <?php echo form_open('cargos/submit'); ?>
                <fieldset>
                    <legend><strong>Cadastro de Cargos</strong></legend>
                </fieldset>
                <label>Cargo </label>
                <input class="form-control" type="text" name="cargos" required="required" placeholder="Cargo" maxlength="20">

                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Salvar </button>
                <button class="btn btn-danger btn-block" type="reset">Limpar </button>
                <a href="<?php base_url(); ?>home" class="btn btn-warning btn-block" type="reset">Voltar </a>
                
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
