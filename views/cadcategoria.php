<?php

include_once '../config.php';
session_start();

$c = new Controller();

if(!$c->verificaLogin()){
    header('Location: ../index.php');
    exit;
}


$c->logouf();


?>
<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>GERENCIADORFINANCEIRO</title>

    <script src="../js/material.min.js"></script>

    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet">

</head>
<body>
<?php include 'menucomp.php'; ?>
<div class="collapse navbar-toggleable-xs" id="collapseEx2" style="padding-left: 550px">
    <div>
        <p><h4>CADASTRO CATEGORIAS</h4></p>
    </div>
</div>
<main class="mdl-layout__content">
    <!--Naked Form-->
    <div class="col-lg-8" style="position: relative; left: 330px; top: 60px">
    <form method="get">
    <div class="card-block col-lg-4"  >
        <!--Body-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="text" name="nome" id="sample3" tabindex="1" required>
            <label class="mdl-textfield__label" for="sample3" style="color: #303f9f; font-size:medium">Nome</label>
        </div>
    </div>
        <div class="card-block col-lg-8" >
            <!--Body-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="desc" id="sample3" tabindex="2">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f; font-size:medium">Descrição</label>
            </div>
        </div>
        <div class="text-xs-center col-md-10">
            <button class="btn btn-default" type="submit" name="salvar" style="background-color: #303f9f">Salvar</button>
            <button class="btn btn-default " style="background-color: #303f9f" onClick="javascript:window.location.href='categorias.php'">Voltar</button>
        </div>
    </form>
    </div>
    <!--Naked Form-->
</main>
<?php include 'rodape.php'; ?>
</div>
</body>
