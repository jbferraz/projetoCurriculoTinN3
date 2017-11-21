<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Projeto Currículo</title>
    <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url('assets/backend_tests/all.css') ?>"/>
</head>
<body>

    <div class="container">
        <h2>Projeto Currículo</h2>
        <h3>/Cidades/be_index</h3><br>

        <!-- 
            $this->load->view('backend_tests/pessoas/index', $data);
            $pessoas é uma array dentro da array $data que passou para a view pelo controller.
        -->
        <a href="<?php echo base_url('cidades/be_add') ?>">Add</a>
        <a href="<?php echo base_url('home/be_index') ?>">Back</a>
        <br><br><br>

            <div class="no-center"><b>CIDADES:</b></div><br><br>

            <?php foreach ($cidades as $c): ?>
                <div class="no-center">
                    <?php echo $c->cidades ?>:
                    <a href="<?php echo base_url('cidades/be_edit/'.$c->idcidades) ?>">Edit</a>
                    <a href="<?php echo base_url('cidades/delete/'.$c->idcidades) ?>">Delete</a>
                    <pre>
                        <?php print_r($c) ?>
                    </pre>
                </div>
            <?php endforeach ?>
    </div>

</body>
</html>