<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

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
<?php include 'menu.php'; ?>
<div class="collapse navbar-toggleable-xs" id="collapseEx2" style="padding-left: 550px">
    <div>
        <p><h2>Cadastro de usuário</h2></p>
    </div>
</div>
<main class="mdl-layout__content">
    <!--Naked Form-->
    <div class="col-lg-8" style="position: relative; left: 330px; top: 30px">
    <form method="get">
    <div class="card-block col-lg-4"  >
        <!--Body-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="text" name="nome" id="sample3" tabindex="1">
            <label class="mdl-textfield__label" for="sample3" style="color:#303f9f">Informe seu nome</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <input class="mdl-textfield__input" type="text" name="login" id="sample3" tabindex="3">
            <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Cadastre o Login</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="admin">
                <span class="mdl-radio__label">Admin</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="usuario"  checked>
                <span class="mdl-radio__label">Usuario comum</span>
            </label>
        </div>
    </div>
        <div class="card-block col-lg-4" >
            <!--Body-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="matricula" id="sample3" tabindex="2">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Informe sua matricula</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="position: relative; left: 50px;">
                <input class="mdl-textfield__input" type="text" name="senha" id="sample3" tabindex="4">
                <label class="mdl-textfield__label" for="sample3" style="color: #303f9f">Cadastre a senha</label>
            </div>
        </div>
        <div class="text-xs-center col-md-10">
            <button class="btn btn-default" type="submit" name="salvar" style="background-color: #303f9f">Salvar</button>
            <button class="btn btn-default " style="background-color: #303f9f" >Voltar</button>
        </div>
    </form>
    </div>
    <!--Naked Form-->
</main>
<?php include 'rodape.php'; ?>
</div>
</body>
