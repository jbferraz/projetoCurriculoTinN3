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
        <h3>/Cargos/be_edit</h3><br>
        <a href="<?php echo base_url('cargos/be_index') ?>">Back</a><br><br><br>
        
        <!-- URL precisa de id: pessoas/be_edit/1 -->

        <form action="<?php echo base_url('cargos/update') ?>"
            method="post">
                <input type="hidden" name="hidden_id" value="<?php echo $cargos->idcargos ?>">
                
                <label>cargos</label><br>
                <input type="text" name="cargos" value="<?php echo $cargos->cargos ?>" required><br><br>
                                
                <input type="submit" name="btnSave" value="Save"/>
        </form>
    </div>

</body>
</html>