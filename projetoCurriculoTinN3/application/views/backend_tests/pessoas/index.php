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
        <h3>/Pessoas/be_index</h3><br>

        <!-- 
            $this->load->view('backend_tests/pessoas/index', $data);
            $pessoas é uma array dentro da array $data que passou para a view pelo controller.
        -->
        <a href="<?php echo base_url('pessoas/be_add') ?>">Add</a>
        <a href="<?php echo base_url('home/be_index') ?>">Back</a>
        <br><br><br>

            <div class="no-center"><b>PESSOAS:</b></div><br><br>
            
            <?php foreach ($pessoas as $p): ?>
                <div class="no-center">
                    <?php echo $p->nome ?>:
                    <a href="<?php echo base_url('pessoas/be_edit/'.$p->idpessoas) ?>">Edit</a>
                    <a href="<?php echo base_url('pessoas/delete/'.$p->idpessoas) ?>">Delete</a>
                    <pre>
                        <?php print_r($p) ?>
                    </pre>
                    <?php echo 'pessoas/Cidades_id '.$p->Cidades_id ?>
                    <?php echo 'cidades '.$p->Cidades_id ?>
                    <br><br>
                </div>
            <?php endforeach ?>

            <div class="no-center"><b>PESSOAS ALL:</b></div><br><br>
            
            <?php foreach ($pessoasall as $p): ?>
                <div class="no-center">
                    <?php echo $p->nome ?>:
                    <a href="<?php echo base_url('pessoas/be_edit/'.$p->idpessoas) ?>">Edit</a>
                    <a href="<?php echo base_url('pessoas/delete/'.$p->idpessoas) ?>">Delete</a>
                    <pre>
                        <?php print_r($p) ?>
                    </pre>
                </div>
            <?php endforeach ?>

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

            <div class="no-center"><b>CARGOS:</b></div><br><br>

            <?php foreach ($cargos as $c): ?>
                <div class="no-center">
                    <?php echo $c->cargos ?>:
                    <a href="<?php echo base_url('cargos/be_edit/'.$c->idcargos) ?>">Edit</a>
                    <a href="<?php echo base_url('cargos/delete/'.$c->idcargos) ?>">Delete</a>
                    <pre>
                        <?php print_r($c) ?>
                    </pre>
                </div>
            <?php endforeach ?>
    </div>

</body>
</html>