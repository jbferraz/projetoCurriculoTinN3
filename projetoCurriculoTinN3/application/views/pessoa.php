<div>
<div class="container">
    <div class="row" style="padding-top:18px;">
        <div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0">
            <?php echo form_open('pessoas/submit'); ?>
            <fieldset>
                <legend><strong>Cadastro de Pessoas</strong></legend>
            </fieldset>
            <label>Nome </label>
            <input class="form-control" type="text" name="nome" required="" placeholder="Nome" maxlength="20">
            <label style="margin-top:6px;">Telefone </label>
            <input class="form-control" type="number" name="telefone" required="" placeholder="Telefone" maxlength="20">
            <label>Data De Nascimento</label>
            <input class="form-control" type="date" name="dtNascimento" required="" placeholder="Nascimento" maxlength="20">
            <label>Sexo</label>
            <select class="form-control" name="sexo" required="">
                <option value="" selected="selected">Selecione...</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>
            <label>E-mail</label>
            <input class="form-control" type="email" name="email" required="" placeholder="E-mail" maxlength="20">
            <label>Descrição</label>
            <input class="form-control" type="text" name="descricao" required="" placeholder="Descriçao" maxlength="20">
            <label>Estado Civil</label>
            <select class="form-control" name="estadocivil" required="">
                <option value="" selected="selected">Selecione...</option>
                <option value="solteiro">Solteiro</option>
                <option value="casado">Casado</option>
                <option value="viuvo">Viúvo</option>

                <option value="divorciado">Divorciado</option>


            </select>
            <label>CPF</label>
            <input class="form-control" type="text" name="cpf" required="" placeholder="CPF" maxlength="20">
            
            <label>Cidades</label>
            <select class="form-control" name="cidades" required="">
                <option value="" selected="selected">Selecione...</option>
                <?php foreach ($cidades as $u): ?>
                    <option value="<?php echo $u->idcidades; ?>"><?php echo $u->cidades; ?></option>
                <?php endforeach; ?>
            </select>
            
            <label>Cargo</label>
            <select class="form-control" name="cargos" id="cargos" required="">
                <option value="" selected="selected">Selecione...</option>
                <?php foreach ($cargos as $u): ?>
                    <option value="<?php echo $u->idcargos; ?>"><?php echo $u->cargos; ?></option>
                <?php endforeach; ?>
            </select> 
            
            <button class="btn btn-success btn-block" type="submit" style="margin-top:10px;">Salvar </button>
            <button class="btn btn-danger btn-block" type="reset">Limpar </button>
            <a href="<?php echo base_url(); ?>home" class="btn btn-warning btn-block" type="reset">Voltar </a>
            
            <a id="btn-lista" class="btn btn-info btn-block"><i class="glyphicon glyphicon-th-list"></i>&nbsp;Listar</a>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
<!-- Listagem de Paises -->
<div class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0"></div>
<div id="div-lista" class="hide col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0"
style="margin-right: 100%">
<div class="">
    <h2 class="">Lista de Pessoas</h2>
</div>
<div class="">
    <table class="col-lg-offset-4 col-lg-push-0 col-md-4 col-md-offset-2 col-md-pull-0">
       
        <tbody>
            <?php foreach ($pessoas as $u):  ?>
                <tr>
                    <td><?php echo $u->nome; ?></td>
                    
                    <td><a  href="<?php echo base_url('pessoas/delete/'.$u->idpessoas) ?>">Excluir </a> 
                        <a  href="<?php echo base_url('pessoas/edit/'.$u->idpessoas) ?>">Editar </a>
                    </td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</div>
<br>
<br>