<div>
    <div class="container">
    <br><br><br><br>
    <?php 
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
                <?php echo form_open('pessoas/update'); ?>
                <input type="hidden" name="hidden_id" value="<?php echo $pessoas->idpessoas ?>">
                <fieldset>
                    <legend><strong>Cadastro de Pessoas</strong></legend>
                </fieldset>
                <label>Nome </label>
                <input class="form-control" type="text" name="nome" required="" placeholder="Nome" value="<?php echo $pessoas->nome ?>" maxlength="20">
                <label style="margin-top:6px;">Telefone </label>
                <input class="form-control" type="number" name="telefone" required="" placeholder="Telefone" value="<?php echo $pessoas->telefone ?>" maxlength="20">
                <label>Data De Nascimento</label>
                <input class="form-control" type="date" name="dtNascimento" required="" placeholder="Nascimento" value="<?php echo $pessoas->dtNascimento ?>" maxlength="20">
                <label>Sexo</label>
                <select class="form-control" name="sexo" required="">
                    <!-- <option value="" selected="<?php echo $pessoas->sexo ?>"></option> -->
                    <option value="masculino"<?php if ('masculino' == $pessoas->sexo) echo ' selected' ?>>Masculino</option>
                    <option value="feminino"<?php if ('feminino' == $pessoas->sexo) echo ' selected' ?>>Feminino</option>
                    <option value="outro"<?php if ('outro' == $pessoas->sexo) echo ' selected' ?>>Outro</option>
                </select>
                <label>E-mail</label>
                <input class="form-control" type="email" name="email" required="" placeholder="E-mail" value="<?php echo $pessoas->email ?>" maxlength="20">
                <label>Descrição</label>
                <input class="form-control" type="text" name="descricao" required="" placeholder="Descriçao" value="<?php echo $pessoas->descricao ?>" maxlength="20">
                <label>Estado Civil</label>
                <select class="form-control" name="estadocivil" required="">
                    <!-- <option value="" selected="<?php echo $pessoas->estadocivil ?>"</option> -->
                    <option value="solteiro"<?php if ('solteiro' == $pessoas->estadocivil) echo ' selected' ?>>Solteiro</option>
                    <option value="casado"<?php if ('casado' == $pessoas->estadocivil) echo ' selected' ?>>Casado</option>
                    <option value="viuvo"<?php if ('viuvo' == $pessoas->estadocivil) echo ' selected' ?>>Viúvo</option>
                    <option value="divorciado"<?php if ('divorciado' == $pessoas->estadocivil) echo ' selected' ?>>Divorciado</option>
                </select>
                <label>CPF</label>
                <input class="form-control" type="text" name="cpf" required="" placeholder="CPF" value="<?php echo $pessoas->cpf ?>" maxlength="20">
                
                <label>Cidades</label>
                <select class="form-control" name="cidades" id="cidades" required="">
                    <!-- <option value="" selected="<?php echo $u->cidades; ?>"</option> -->
                    <?php foreach ($cidades as $u): ?>
                        <option value="<?php echo $u->idcidades; ?>"<?php if ($u->idcidades == $pessoas->Cidades_id) echo ' selected' ?>> 
                        <?php echo $u->cidades; ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <script> selectElement('cidades', '<?php echo $pessoas->Cidades_id ?>') </script> -->
                <label>Cargo</label>
                <select class="form-control" name="cargos" id="cargos" required="">
                    <!-- <option value="" selected="<?php echo $pessoas->cargo ?>"></option> -->
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