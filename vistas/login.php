<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
    <meta name="description" content="">
    <title>Mi cultivo | Inicio de sesion</title>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">  
    <!-- Custom styles for this template -->
    <link href="../assets/signin.css" rel="stylesheet">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/jquery/jquery.min.js"></script>
  </head>
  <body class="text-center">
<main class="form-signin w-100 m-auto">
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-0">
<?php 
if(!empty($errores)): ?>
  <?php echo $errores; ?>
<?php endif; ?></header>
  <form action="<?php echo htmlspecialchars(basename($_SERVER['PHP_SELF'],'.php')); ?>" method="POST">
    <?php include('vistas/iconos.php'); ?>
  <!-- <h1 class="display-6 fw-light text-light">Inicio de sesión.</h1>-->
     <img class="bd-placeholder-img " src="assets/logo.png" width="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
   <br></br>
   <?php error_reporting(0); ?>
    <div class="form-floating">
      <input type="text" name="usuario" class="form-control <?php echo $clasesusr; ?>" id="floatingInput" placeholder="Text" value="<?php echo ($usuario); ?>" required>
      <label class="h6 fw-light" for="floatingInput"><?php echo $correo; ?> Usuario</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" name="contrasena" class="form-control <?php echo $clasespwd; ?>" id="floatingInput" placeholder="Password" value="<?php echo($password); ?>" required>
      <label class="h6 fw-light" for="floatingInput"><?php echo $llave; ?> Contraseña</label>
    </div>
     <br>
    <button class="w-100 btn btn-lg btn-success fw-light" type="submit"><?php echo $entrar; ?> Iniciar sesión</button>        
    <!-- <a class="nav-link active" aria-current="page" href="registro.php"><p class="mt-5 mb-3 text-primary">¿No estas registrado? Regístrate</p></a> -->
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
  </body>
</html>
