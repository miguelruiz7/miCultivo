<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cultivo | Ajustes </title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"href="assets/second.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/png">
    <script src="assets/jquery/jquery.min.js"></script>
  </head>
  <body>


<!-- Notificaciones -->
<section class="py-5 container">
<?php 
if(!empty($errores)): ?>
  <?php echo $errores; ?>
<?php endif; ?>
    <div class="row py-lg-4">
      <div class="col-lg-12">
        <h1 class="fw-light">Ajustes</h1>  <a href="<?php echo basename($_SERVER['PHP_SELF'],".php"); ?>"><button class="btn btn-light"><?php echo $i_recargar; ?></button></a>
    </div>
</section>
<main>
<div class="container">
<!-- Cuerpo -->
<?php 
 // Seleccionar el usuario adecuado 
 $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$user_id'");
 if (mysqli_num_rows($consulta)>0)
 {
   $columnasdatos = mysqli_fetch_array($consulta);
    /*echo $columnas['nombre'];
    echo $columnas['correo'];
    echo $columnas['usuario'];
    echo $columnas['contrasena']; */
 }else{
     $usuario .= 'No hay';
 }
?>

<div class="list-group w-auto">
     <a href="#info" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
   <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#usuario">Ver</button>
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Acerca del usuario</h6>
        <p class="mb-0 opacity-75">Modifica tus datos personales.</p>
      </div>
      <small class="opacity-50 text-nowrap">.</small>
    </div>
  </a>
  <a href="#contraseña" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#contraseña">Cambiar</button>
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Contraseña</h6>
        <p class="mb-0 opacity-75">Modifica tu contraseña</p>
      </div>
      <small class="opacity-50 text-nowrap">.</small>
    </div>
  </a>
  <a href="#destruir" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <button type="submit" name="btndel" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delcuenta">Destruir</button>
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Elimina tu cuenta</h6>
        <p class="mb-0 opacity-75">Elimina tu cuenta permanentemente.</p>
      </div>
      <small class="opacity-50 text-nowrap">.</small>
    </div>
  </a>
</div>
<div class="container">
    <?php
    include('vistas/modulos/modales_formularios/cuenta_contrasena.php');
    include('vistas/modulos/modales_formularios/cuenta_eliminar.php');
    include('vistas/modulos/modales_formularios/cuenta_modificar.php');
    ?>
</div>               
</div> 
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2500);
</script> 

<div id="ultimo"></div>
  </body>
  <script src="modalbootstrap.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>

