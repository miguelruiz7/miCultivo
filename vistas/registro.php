  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
    <meta name="description" content="">
    <title>Mi cultivo | Registro</title>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">  
    <!-- Custom styles for this template -->
    <link href="assets/signin.css" rel="stylesheet">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
  </head>
  <body class="text-center">
<main class="form-signin w-100 m-auto">
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-0">
<?php 
if(!empty($errores)): ?>
  <?php echo $errores; ?>
<?php endif; ?></header>
  <form id="registro" action="<?php echo htmlspecialchars(basename($_SERVER['PHP_SELF'],'.php')); ?>" method="POST">
    <?php include('vistas/iconos.php'); ?>
    <img class="bd-placeholder-img " src="assets/logo.png" width="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
   <br></br>
   <?php error_reporting(0); ?>
   <div class="form-floating">
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Text"  value="<?php echo ($nombre); ?>"  required>
      <label class="h6 fw-light" for="floatingInput">Nombre</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="text" name="usuario" class="form-control <?php echo $clasesusr;?>" id="usuario" placeholder="Text"  value="<?php echo ($usuario); ?>"  required>
      <label class="h6 fw-light" for="floatingInput"><?php echo $arroba; ?> Usuario</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="email" name="correo" class="form-control <?php echo $clasesmail;?>" id="correo" placeholder="Text"  value="<?php echo ($correo_main); ?>"  required>
      <label class="h6 fw-light" for="floatingInput"><?php echo $correo; ?> Correo</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" name="contrasena" class="form-control <?php echo $clasespwd;?>" id="contrasena" placeholder="Password"   value="<?php echo ($contrasena); ?>" required>
      <label class="h6 fw-light" for="floatingInput"><?php echo $llave; ?> Contraseña</label>
    </div>
     <br>
     <div class="container" id="pass"></div>
     <div class="form-floating">
      <input type="password" name="contrasena2" class="form-control" id="contrasena2" placeholder="Password"  value="<?php echo ($contrasena2); ?>"  required>
      <label class="h6 fw-light" for="floatingInput"><?php echo $llave; ?> Confirma la contraseña</label>
    </div>
     <br>
     
    <button class="w-100 btn btn-lg btn-success fw-light" type="submit"><?php echo $entrar; ?> Regístrate</button>     
       
    <a class="nav-link active" aria-current="page" href="login"><p class="mt-5 mb-3 text-light">¿Estás registrado? Inicia sesión</p></a>
    <p class="mt-5 mb-3 text-light">&copy; <?php echo date('Y'); ?> Universidad Tecnológica del Valle del Mezquital</p>
  </form>
</main>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
        $(this).remove(); 
    });
}, 2500);
</script>
<div id="ultimo"></div>
  </body>
</html>
