<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<title>Projeto Currículo</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/backend_tests/all.css') ?>" />
</head>

<body>

	<div class="container">
		<h2>Projeto Currículo</h2>
		<h3>/Pessoas/be_add</h3><br>
        <a href="<?php echo base_url('pessoas/be_index') ?>">Back</a><br><br><br>

		<form action="<?php echo base_url('pessoas/submit') ?>"
            method="post">
                <label>nome</label><br>
                <input type="text" name="nome" required=""><br><br>
                
                <label>telefone</label><br>
                <input type="number" name="telefone" required=""><br><br>
                
                <label>dtNascimento</label><br>
                <input type="text" name="dtNascimento" required=""><br><br>
                
                <label>sexo</label><br>
                <select name="sexo" required="">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select><br><br>
                
                <label>email</label><br>
                <input type="text" name="email" required=""><br><br>
                
                <label>descricao</label><br>
                <input type="text" name="descricao" required=""><br><br>
                
                <label>estadocivil</label><br>
                <select name="estadocivil" id="estadocivil" required="">
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="viuvo">Viúvo</option>
                    <option value="divorciado">Divorciado</option>
                </select><br><br>
                
                <label>cpf</label><br>
                <input type="text" name="cpf" required=""><br><br>
                
                <label>cidades</label><br>
                <select name="cidades" required="">
                    <?php foreach ($cidades as $c): ?>
                        <option value="<?php echo $c->idcidades; ?>"><?php echo $c->cidades; ?></option>
                    <?php endforeach ?>
                </select><br><br>
                
                <label>cargos</label><br>
                <select name="cargos" required="">
                    <?php foreach ($cargos as $c): ?>
                        <option value="<?php echo $c->idcargos; ?>"><?php echo $c->cargos; ?></option>
                    <?php endforeach ?>
                </select><br><br><br>
                
                <input type="submit" name="btnSave" value="Save"/>
        </form>
	</div>
    
</body>

</html>
