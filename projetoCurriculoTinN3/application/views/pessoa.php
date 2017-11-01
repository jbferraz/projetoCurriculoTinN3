<div>
    <div class="container">
        <div class="row" style="padding-top:18px;">
            <div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0">
                <?php echo form_open('pessoa/inserir'); ?>
                <fieldset>
                    <legend><strong>Cadastro de Pessoas</strong></legend>
                </fieldset>
                <label>Nome </label>
                <input class="form-control" type="text" name="nome" required="" placeholder="nome" maxlength="20">
                <label style="margin-top:6px;">Telefone </label>
                <input class="form-control" type="number" name="telefone" required="" placeholder="telefone" maxlength="20">
                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Salvar </button>
                <button class="btn btn-danger btn-block" type="reset">Cancelar </button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
