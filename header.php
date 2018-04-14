<!DOCTYPE html>

<?php $page = basename($_SERVER['PHP_SELF']); ?>


<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="erus, equipe de robotica, trufes, lre" />
	
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <title>Equipe de Robótica da UFES</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>
<body>
  <div class="intro container-fluid jumbotrom col-xs-12 col-md-12 col-lg-12" style="max-height:100%" >
    <a href="index.php"><img href="index.php" id="header-image" src="images/logo_02.png" class="center-block img-responsive" alt=""></a> </div>
  <div class="container">
    <div class="row-fluid">
      
      <nav class="nav navbar-fixed-left col-sm-3 col-md-3 col-lg-3" id="navbar-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only"> Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ERUS</a>
        </div>
          <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" >
            <ul class="nav navbar-nav">
              <li class="<?php if($page == "index.php") { echo "active";} ?>">
                <a href="index.php">Home</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                  Equipe
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="<?php if($page == "membros.php") { echo "active";} ?>"><a href="membros.php"> Membros </a></li>
                  <li class="<?php if($page == "professores.php") { echo "active";} ?>"><a href="professores.php"> Professores e Colaboradores </a></li>
                  <li class="<?php if($page == "egressos.php") { echo "active";} ?>"><a href="egressos.php"> Ex-membros</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                  TRUFES
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="<?php if($page == "regulamentos.php") { echo "active";} ?>"><a href="regulamentos.php"> Regulamentos</a></li>
                  <li class="<?php if($page == "inscricoes.php") { echo "active";} ?>"><a href="inscricoes.php"> Inscrições</a></li>
                </ul>
              </li>
              <li class="<?php if($page == "nossosrobos.php") { echo "active";} ?>"><a href="nossosrobos.php">Nossos Robôs</a></li>
              <li class="<?php if($page == "noticias.php") { echo "active";} ?>"><a href="noticias.php">Notícias</a></li>
              <li class="<?php if($page == "contatos.php") { echo "active";} ?>"><a href="contatos.php">Contatos</a></li>
              <li class="<?php if($page == "faq.php") { echo "active";} ?>"><a href="faq.php">Perguntas Frequentes</a></li>
            </ul>
          </div>
      </nav>
      <div class="body-wrapper  col-xs-12 col-sm-9 col-lg-9 col-md-9" id="body-container">
        <div id="page-content" class="content container-fluid ">