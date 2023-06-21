
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi cultivo | Inicio </title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css"href="assets/second.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/png">
    <script src="assets/jquery/jquery.min.js"></script>
  </head>
  <body>
<!-- Contiene la vista de calculadora -->
<section class="py-5 container">
  <!-- Notificaciones -->
<div id="notificaciones"></div>
    <div class="row py-lg-5">
      <div class="col-lg-12">
        <h1 class="fw-light">Calculadora</h1> <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>"><button class="btn btn-light"><?php echo $i_recargar; ?></button></a>
    </div>
  </section>
 
<main>
<div class="container">
<!-- Cuerpo -->
                  <div class=" justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                    <div class="col-md-4">
                    <div class="form-floating mb-3">
                    <select name="txtcultivo" id="cultivo" class="form-control rounded-3" id="floatingInput">
                    <option value="0" selected="">Seleccione:</option> 
                        <?php echo mostrarcultivos(sesion())?>
                    </select>



                    <label for="floatingInput">Selecciona el tipo de cultivo:</label>
                    </div>
                    
                    <div id="tipos" class="form-floating mb-3">
                      <!-- Aqui deben aparecer los tipo -->
                      </div>
                    
                      <div id="muestra" class="form-floating mb-3">
                      <!-- Aqui deben aparecer los parametros -->
                      </div>

                    </div>

                    <div class="col-md-8">
                    <div class="container text-center" id="resultado" class="form-floating mb-3">
                      <!-- Aqui deben aparecer los resultados -->
                      
                      </div>
                    </div>
        
                    </div>
                    </div>
                </form>
                </div></center>
</div>
<div id="ultimo"></div>
  </body>
  <script src="assets/js/calculos.js"></script>
  <script src="modalbootstrap.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
