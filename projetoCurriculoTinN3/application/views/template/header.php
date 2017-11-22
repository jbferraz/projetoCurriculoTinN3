<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Projeto Curriculo</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Roboto:400,500,700'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css'); ?>">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Projeto Curriculo</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li role="presentation"><a href="<?php base_url(); ?>home">Home </a></li>
                        <li role="presentation"><a href="<?php base_url(); ?>pessoas">Cadastro Pessoas</a></li>
                        <li role="presentation"><a href="<?php base_url(); ?>cidades">Cadastro Cidades</a></li>
                        <li role="presentation"><a href="<?php base_url(); ?>cargos">Cadastro Cargos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
