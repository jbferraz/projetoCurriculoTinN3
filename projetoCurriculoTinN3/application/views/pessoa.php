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
                <label>Data De Nascimento</label>
                <input class="form-control" type="date" name="dtnascimento" required="" placeholder="dtNascimento" maxlength="20">
                <label>Sexo</label>
                <select class="form-control" name="sexo" required="">
                    <option value="" selected="selected">Selecione...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
                <label>E-mail</label>
                <input class="form-control" type="email" name="email" required="" placeholder="email" maxlength="20">
                <label>Descrição</label>
                <input class="form-control" type="text" name="descricao" required="" placeholder="descriçao" maxlength="20">
                <label>Estado Civil</label>
                <input class="form-control" type="text" name="estadocivil" required="" placeholder="estadocivil" maxlength="20">
                <label>CPF</label>
                <input class="form-control" type="text" name="cpf" required="" placeholder="cpf" maxlength="20">
                <label>Cidades</label>

                <select class="form-control" name="cidade" required="">
                    <?php foreach ($cidades as $u): ?>
                        <option value="<?php echo $u->Cidades_id; ?>"><?php echo $u->cidades; ?></option>
                    <?php endforeach; ?>
                </select>

                <label>Cargo</label>
                
                <select class="form-control" name="cargo" required="">
                    <?php foreach ($cargos as $u): ?>
                        <option value="<?php echo $u->Cargos_id; ?>"><?php echo $u->cargos; ?></option>
                    <?php endforeach; ?>
                </select>


                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Salvar </button>
                <button class="btn btn-danger btn-block" type="reset">Cancelar </button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
