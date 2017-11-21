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
		<h3>/Cidades/be_add</h3><br>
		<a href="<?php echo base_url('cidades/be_index') ?>">Back</a><br><br><br>

		<form action="<?php echo base_url('cidades/submit') ?>"
            method="post">
                <label>cidades</label><br>
                <input type="text" name="cidades" required=""><br><br>
                                
                <input type="submit" name="btnSave" value="Save"/>
        </form>
	</div>
    
</body>

</html>
