<div>
    <div class="container">
        <div class="row" style="padding-top:18px;">
            <div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0">
                <?php echo form_open('pessoas/submit'); ?>
                <input type="hidden" name="hidden_id" value="<?php echo $pessoas->idpessoas ?>">
                <fieldset>
                    <legend><strong>Cadastro de Pessoas</strong></legend>
                </fieldset>
                <label>Nome </label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->nome ?>" maxlength="20">
                <label style="margin-top:6px;">Telefone </label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->telefone ?>" maxlength="20">
                <label>Data De Nascimento</label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->dtNascimento ?>" maxlength="20">
                <label>Sexo</label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->sexo ?>" maxlength="20">
                <label>E-mail</label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->email ?>" maxlength="20">
                <label>Descrição</label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->descricao ?>" maxlength="20">
                <label>Estado Civil</label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->estadocivil ?>" maxlength="20">
                <label>CPF</label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->cpf ?>" maxlength="20">
                <label>Cidades</label>
                <select class="form-control" name="cidades" id="cidades" required="">
                <option value="" selected="selected">Selecione...</option>
                    <?php foreach ($cidades as $u): ?>
                        <option value="<?php echo $u->idcidades; ?>"<?php if ($u->idcidades == $pessoas->Cidades_id) echo ' selected' ?>> 
                        <?php echo $u->cidades; ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <script> selectElement('cidades', '<?php echo $pessoas->Cidades_id ?>') </script> -->
                <label>Cargo</label>
                <select class="form-control" name="cargos" id="cargos" required="">
                    <option value="" selected="selected">Selecione...</option>
                    <?php foreach ($cargos as $u): ?>
                        <option value="<?php echo $u->idcargos; ?>"<?php if ($u->idcargos == $pessoas->Cargos_id) echo ' selected' ?>> 
                        <?php echo $u->cargos; ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <script> selectElement('cargos', '<?php echo $pessoas->Cargos_id ?>') </script> -->
                <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Salvar </button>
                <button class="btn btn-danger btn-block" type="reset">Limpar </button>
                <a href="<?php echo base_url(); ?>pessoas" class="btn btn-warning btn-block" type="reset">Voltar </a>
                
                <!-- <a id="btn-lista" class="btn btn-warning btn-block"><i class="glyphicon glyphicon-th-list"></i>Listar</a> -->
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>