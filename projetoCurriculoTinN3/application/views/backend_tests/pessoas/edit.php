<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Projeto Currículo</title>
    <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url('assets/backend_tests/all.css') ?>"/>
    <script type="text/javascript" 
        src="<?php echo base_url('assets/backend_tests/all.js') ?>"></script>
</head>
<body>

    <div class="container">
        <h2>Projeto Currículo</h2>
        <h3>/Pessoas/be_edit</h3><br>
        <a href="<?php echo base_url('pessoas/be_index') ?>">Back</a><br><br><br>
        
        <!-- URL precisa de id: pessoas/be_edit/1 -->

        <form action="<?php echo base_url('pessoas/update') ?>"
            method="post">
                <input type="hidden" name="hidden_id" value="<?php echo $pessoas->idpessoas ?>">
                
                <label>nome</label><br>
                <input type="text" name="nome" value="<?php echo $pessoas->nome ?>" required><br><br>
                
                <label>telefone</label><br>
                <input type="number" name="telefone" value="<?php echo $pessoas->telefone ?>" required><br><br>
                
                <label>dtNascimento</label><br>
                <input type="text" name="dtNascimento" value="<?php echo $pessoas->dtNascimento ?>" required><br><br>
                
                <label>sexo</label><br>
                <select name="sexo" id="sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select><br><br>
                <script> selectElement('sexo', '<?php echo $pessoas->sexo ?>') </script>

                <label>email</label><br>
                <input type="text" name="email" value="<?php echo $pessoas->email ?>" required><br><br>
                
                <label>descricao</label><br>
                <input type="text" name="descricao" value="<?php echo $pessoas->descricao ?>" required><br><br>
                
                <label>estadocivil</label><br>
                <select name="estadocivil" id="estadocivil" required>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="viuvo">Viúvo</option>
                    <option value="divorciado">Divorciado</option>
                </select><br><br>
                <script> selectElement('estadocivil', '<?php echo $pessoas->estadocivil ?>') </script>
                
                <label>cpf</label><br>
                <input type="text" name="cpf" value="<?php echo $pessoas->cpf ?>" required><br><br>
                
                <label>cidades</label><br>
                <select name="cidades" id="cidades" required>
                    <?php foreach ($cidades as $c): ?>
                        <option value="<?php echo $c->idcidades; ?>"><?php echo $c->cidades; ?></option>
                    <?php endforeach ?>
                </select><br><br>
                <script> selectElement('cidades', '<?php echo $pessoas->Cidades_id ?>') </script>
                
                <label>cargos</label><br>
                <select name="cargos" id="cargos" required>
                    <?php foreach ($cargos as $c): ?>
                        <option value="<?php echo $c->idcargos; ?>"><?php echo $c->cargos; ?></option>
                    <?php endforeach ?>
                </select><br><br><br>
                <script> selectElement('cargos', '<?php echo $pessoas->Cargos_id ?>') </script>
                
                <input type="submit" name="btnSave" value="Save"/>
        </form>
    </div>

</body>
</html>