<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
    <meta name="description" content="">
        <link rel="shortcut icon" href="assets/logo.png" type="image/png">
    <title>Mi cultivo | Inicio de sesion</title>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">  
    <!-- Custom styles for this template -->
    <link href="assets/signin.css" rel="stylesheet">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
  </head>
  <body class="text-center">
<main class="form-signin w-100 m-auto">
<header id="notificaciones" class="d-flex flex-wrap justify-content-center py-3 mb-4 border-0">
</header>
  <form id="login">
    <?php include('vistas/iconos.php'); ?>
  <!-- <h1 class="display-6 fw-light text-light">Inicio de sesión.</h1>-->
     <img class="bd-placeholder-img " src="assets/logo.png" width="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
   <br></br>
   <?php error_reporting(0); ?>
    <div class="form-floating">
      <input type="text" name="usuario" id="usuario" autocomplete="off" class="form-control <?php echo $clasesusr; ?>" id="floatingInput" placeholder="Text"  pattern="[A-Za-z0-9]+" required>
      <label class="h6 fw-light" for="floatingInput"><?php echo $correo; ?> Usuario</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" name="contrasena" id="contrasena" autocomplete="off" class="form-control <?php echo $clasespwd; ?>" id="floatingInput" placeholder="Password"   required>
      <label class="h6 fw-light" for="floatingInput"><?php echo $llave; ?> Contraseña</label>
    </div>
     <br>
    <button class="w-100 btn btn-lg btn-success fw-light" type="button" onclick="iniciar()"><?php echo $entrar; ?> Iniciar sesión</button>        
   <a class="nav-link active" aria-current="page" href="registro"><p class="mt-5 mb-3 text-light">¿No estás registrado? Regístrate</p></a>
    <p class="mt-5 mb-3 text-light">&copy; <?php echo date('Y'); ?> Mi cultivo | v1.0.0-estable</p>
  </form>
</main>
<script src="controlador/validar.js"></script>
<div id="ultimo"></div>
  </body>
</html>
