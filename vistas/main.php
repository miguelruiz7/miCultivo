
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cultivo | Inicio </title>
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
    <a href="index" class="d-block p-3 link-dark text-decoration-none">
      <img src="assets/logo.png" class="bi pe-none" width="40" height="40"></img>
      <span class="visually-hidden"></span>
    </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
              <?php
              $rutas = rutas();
              foreach ($rutas as $ruta){
                ?>
                  <li class="nav-item">
                <a href="#" onclick="<?php echo $ruta["funcion"] ?>" class="nav-link py-3 rounded-0" aria-current="page"><?php echo $ruta["icono"] ?></a>
                </li> 
                <?php
              }
              ?>


                <button class="nav-link py-3 rounded-0" title="Agregar" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>         </button>
                  <div class="dropdown">
                      <ul class="dropdown-menu text-small shadow">
                      <?php
              $modales = agregar();
              foreach ($modales as $elemento){
                ?>
                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#<?php echo $elemento["funcion"] ?>"><?php echo $elemento["icono"]." ".$elemento["nombre"] ?></button></li>
                <?php
                    }
                ?>
                     </ul>
                </div>
              
    </ul>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <!-- <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle"> -->
        <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 40px;">
  <span style="color: white; font-size: px;">  <?php echo substr($datos,0,1);?> </span>
</div>
      </a>
      <ul class="dropdown-menu text-small shadow">
       
       <!-- <li><a class="dropdown-item" href="#">Perfil</a></li> -->
       <li><p class="dropdown-title p-3 text-center"><?php echo $datos; ?></p></li> 
        <li><hr class="dropdown-divider"></li> 
         <li><a class="dropdown-item" href="#" onclick="ajustes()">Ajustes</a></li>
        <li><a class="dropdown-item" href="#" onclick="cerrar()">Cerrar sesión</a></li>
       <!--  <li><hr class="dropdown-divider"></li> 
            <li><p class="dropdown-title p-3 text-center"><?php echo date('Y'); ?> Mi cultivo | v1.0.0</p></li> -->
      </ul>
    </div>
  </div>
</header>
</div>
<section id="notificaciones" class="container"></section>
<main>
  <!--<div class="container">-->
  <iframe id="main" src="cultivo.php" frameborder="0" ></h1></iframe>
 <!-- </div> -->
</main>
<div class="container">
<?php 
include('vistas/iconos.php');
include('vistas/modulos/modales_formularios/agregar_cultivo.php');
include('vistas/modulos/modales_formularios/planificar_cultivo.php');
include('vistas/modulos/modales_formularios/agregar_bitacora.php')
?>
</div>
<div id="ultimo"></div>
  </body>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app.js"></script>
  <script>
// Espera a que el iframe se cargue
document.getElementById('main').addEventListener('load', function() {
    // Envía una solicitud AJAX al archivo PHP que genera los select con el nombre de cultivos
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Reemplaza el contenido del select con la respuesta del servidor
        document.getElementById('idcultivo').innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "controlador/generar_select_cultivos.php", true);
    xhttp.send();
  
});
  </script>
   <script>
// Espera a que el iframe se cargue
document.getElementById('main').addEventListener('load', function() {
    // Envía una solicitud AJAX al archivo PHP que genera los select con el nombre de cultivos
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Reemplaza el contenido del select con la respuesta del servidor
        document.getElementById('idcultivo_bit').innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "controlador/generar_select_cultivos_bit.php", true);
    xhttp.send();
  
});
  </script>
   <script src="planes.js"></script>
</html>