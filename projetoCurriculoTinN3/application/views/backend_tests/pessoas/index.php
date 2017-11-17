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
        <h3>/Pessoas/be_index</h3><br>

        <!-- 
            $this->load->view('backend_tests/pessoas/index', $data);
            $pessoas é uma array dentro da array $data que passou para a view pelo controller.
        -->
        
        <a href="<?php echo base_url('pessoas/be_add') ?>">Add</a>
        <a href="<?php echo base_url('pessoas/be_edit/1') ?>">Edit</a>
        <a href="<?php echo base_url('pessoas/delete/1') ?>">Delete</a>
        <pre class="no-center">
            <b>PESSOAS:</b>

            <?php print_r($pessoas) ?>

            <b>CIDADES:</b>

            <?php print_r($cidades) ?>

            <b>CARGOS:</b>

            <?php print_r($cargos) ?>
            </pre>

    </div>

</body>
</html>