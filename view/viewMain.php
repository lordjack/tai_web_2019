<?php
/*
//include_once '../../global.php';
include_once '../controle/controleMain.php';

if( !empty($_POST['form_submit']) ) {
    controleMain::rota();
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" href="img/favicon.ico">
    <title>SiGer</title>

    <!-- Bootstrap URL - CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="lib/css/theme.css" rel="stylesheet">
    <!-- Ajax Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.js"
            integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body role="document">
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">[ SisGer ] Sistema Gerenciador de Certificado</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main">
    <br>
    <div class="page-header">
        <h2 class="form-signin-heading">
            <div id="m_texto"> Menu Principal</div>
        </h2>
    </div>

    <form class="form" method="post" action="viewMain.php">
        <input TYPE="hidden" NAME="form_submit" VALUE="OK">

        <div class='row'>

            <div class='col-sm-3' style="text-align: center">
                <a href="viewAluno.php">
                    <img src="../lib/img/menu_aluno.png">
                </a>
            </div>

            <div class='col-sm-3' style="text-align: center">
                <a href="viewEvento.php">
                    <img src="../lib/img/menu_evento.png">
                </a>
            </div>
            <!--
                    <div class='col-sm-3' style="text-align: center">
                        <button type="submit" name="acao" value="evento/">
                            <img src="../lib/img/menu_certificado.png">
                        </button>
                    </div>
            -->
        </div>
    </form>

    <div class="page-header">
        <b>&copy;2019&nbsp;&nbsp;&raquo;&nbsp;&nbsp; </b>
    </div>

</div> <!-- /container -->
</body>
</html>
