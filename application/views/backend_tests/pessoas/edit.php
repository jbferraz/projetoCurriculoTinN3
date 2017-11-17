<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Home</title>
    <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url('assets/backend_tests/all.css') ?>"/>
</head>
<body>

    <div class="container">
        <h2>Projeto Currículo</h2>
        <h3>/Pessoas/be_edit</h3><br>

        <!-- URL precisa de id: pessoas/be_edit/1 -->

        <form action="<?php echo base_url('pessoas/update') ?>"
            method="post">
                <input type="hidden" name="txt_hidden_id" value="<?php echo $pessoas->idpessoas ?>">
                <label>nome</label><br>
                <input type="text" name="nome" value="<?php echo $pessoas->nome ?>" required=""><br><br>
                <label>telefone</label><br>
                <input type="number" name="telefone" value="<?php echo $pessoas->telefone ?>" required=""><br><br>
                <label>dtNascimento</label><br>
                <input type="text" name="dtNascimento" value="<?php echo $pessoas->dtNascimento ?>" required=""><br><br>
                <label>sexo</label><br>
                <select name="sexo" required="">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select><br><br>
                <label>email</label><br>
                <input type="text" name="email" value="<?php echo $pessoas->email ?>" required=""><br><br>
                <label>descricao</label><br>
                <input type="text" name="descricao" value="<?php echo $pessoas->descricao ?>" required=""><br><br>
                <label>estadocivil</label><br>
                <select name="estadocivil" required="">
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                </select><br><br>
                <label>cpf</label><br>
                <input type="text" name="cpf" value="<?php echo $pessoas->cpf ?>" required=""><br><br>
                <label>cidades</label><br>
                <select name="cidades"  required="">

                <?php foreach ($cidades as $c): ?>
                    <option value="<?php echo $c->idcidades; ?>"><?php echo $c->cidades; ?></option>
                <?php endforeach ?>

                </select><br><br>
                <label>cargos</label><br>
                <select name="cargos" required="">

                <?php foreach ($cargos as $c): ?>
                    <option value="<?php echo $c->idcargos; ?>"><?php echo $c->cargos; ?></option>
                <?php endforeach ?>

                </select><br><br>
                <input type="submit" name="btnSave" value="Save"/>
        </from>

    </div>

</body>
</html>