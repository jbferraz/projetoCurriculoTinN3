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
        <h3>/Home/be_index</h3><br>
        
        Go to /Pessoas/be_index:
        <a href="<?php echo base_url('pessoas/be_index') ?>">Pessoas</a><br>
        Go to /Pessoas/be_add:
        <a href="<?php echo base_url('pessoas/be_add') ?>">Add Pessoas</a><br><br>

        Go to /Cidades/be_index:
        <a href="<?php echo base_url('cidades/be_index') ?>">Cidades</a><br>
        Go to /Cidades/be_add:
        <a href="<?php echo base_url('cidades/be_add') ?>">Add Cidades</a><br><br>

        Go to /Cargos/be_index:
        <a href="<?php echo base_url('cargos/be_index') ?>">Cargos</a><br>
        Go to /Cargos/be_add:
        <a href="<?php echo base_url('cargos/be_add') ?>">Add Cargos</a><br><br>
    </div>

</body>
</html>