<?php include('vistas/iconos.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cultivo | <?php echo $base;?> </title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"href="assets/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/png">
    <script src="assets/jquery/jquery.min.js"></script>
  </head>
  <body>
<!-- Encabezado -->

<div class="container">
<header>
<div class="d-flex flex-column flex-shrink-0 fixed-top" style="width: 4.5rem;height: 100%;">
    <a href="index" class="d-block p-3 link-dark text-decoration-none" title="Mi cultivo" data-bs-toggle="tooltip" data-bs-placement="right">
      <img src="assets/logo.png" class="bi pe-none" width="40" height="40"></img>
      <span class="visually-hidden"></span>
    </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
       <?php
      $pagina=basename($_SERVER['PHP_SELF']);
      if($pagina=="index.php"){
        ?>
        <li class="nav-item">
        <a href="index" class="nav-link py-3 rounded-0" aria-current="page" title="Inicio" data-bs-toggle="tooltip" data-bs-placement="right">
        <?php echo $i_inicio; ?>
        </a>
      </li>
      <!---->
         <button class="nav-link py-3 rounded-0" title="Agregar" data-bs-toggle="dropdown" aria-expanded="false">
         <?php echo $i_agregar_redondo; ?>
         </button>
                  <div class="dropdown">
                      <ul class="dropdown-menu text-small shadow">
                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#agregar"><?php echo $i_externo; ?> Agregar cultivo</button></li>
                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#agregarbitacora"><?php echo $i_externo; ?> Agregar bitácora</button></li>
                      </ul>
                </div>
      </li>
      <li>
        <a href="calculadora" class="nav-link py-3  rounded-0" title="Calculadora" data-bs-toggle="tooltip" data-bs-placement="right">
        <?php echo $i_calculadora; ?>
        </a>
      <li>
        
        <?php
      }else if($pagina=="calculadora.php") {
      ?>
      <li class="nav-item">
        <a href="index" class="nav-link py-3 rounded-0" aria-current="page" title="Inicio" data-bs-toggle="tooltip" data-bs-placement="right">
        <?php echo $i_inicio; ?>
        </a>
      </li>
      <?php
      }else if($pagina=="bitacora.php" || $pagina=="ajustes.php"  ){
        ?>
    <li class="nav-item">
        <a href="index" class="nav-link py-3 rounded-0" aria-current="page" title="Inicio" data-bs-toggle="tooltip" data-bs-placement="right">
        <?php echo $i_inicio; ?>
        </a>
      </li>
      </li>

        <?php
      }
      ?>
    </ul>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <!-- <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle"> -->
        <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 40px;">
  <span style="color: white; font-size: px;"><?php include('modelo/usuario.php'); echo substr($usuario,0,1);?> </span>
</div>
      </a>
      <ul class="dropdown-menu text-small shadow">
        <!-- <li><a class="dropdown-item" href="#">Ajustes</a></li> -->
       <!-- <li><a class="dropdown-item" href="#">Perfil</a></li> -->
       <li><p class="dropdown-title p-3 text-center"><?php include('modelo/usuario.php'); echo $usuario;?></p></li> 
        <li><hr class="dropdown-divider"></li> 
        <li><a class="dropdown-item" href="ajustes">Ajustes</a></li>
        <li><a class="dropdown-item" href="logout">Cerrar sesión</a></li>
      </ul>
    </div>
  </div>
</header>
</div>