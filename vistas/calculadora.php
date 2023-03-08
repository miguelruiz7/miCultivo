<!-- Contiene la vista de calculadora -->
<section class="py-5 container">
  <!-- Notificaciones -->
<div id="notificaciones"></div>
    <div class="row py-lg-5">
      <div class="col-lg-12">
        <h1 class="fw-light">Calculadora</h1> <a href="<?php echo basename($_SERVER['PHP_SELF'],".php"); ?>"><button class="btn btn-light"><?php echo $i_recargar; ?></button></a>
    </div>
  </section>
 
<main>
<div class="container">
<!-- Cuerpo -->
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                    <div class="col-md-4">
                    <div class="form-floating mb-3">
                    <select name="txtcultivo" id="cultivo" class="form-control rounded-3" id="floatingInput">
                    <option value="0" selected="">Seleccione:</option> 
                              <?php
                            include('controlador/conexion.php');
                            $generales="SELECT * FROM cultivo";
                            $resultado= mysqli_query($conexion,$generales);
                                while($valores= mysqli_fetch_array($resultado)){
                                    ?>
                                    <option value="<?php echo $valores['id'];?>"><?php echo $valores['nombre']; ?></option>
                                    <?php
                                }
                    ?>
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
                    <h2 class='fw-light m-2 text-center'>Su resultado:</h2>
                    <div class="container text-center" id="resultado" class="form-floating mb-3">
                      <!-- Aqui deben aparecer los resultados -->
                      
                      </div>
                      <script>

                        //------------------------------------//
                        //--Codigo para guardar el resultado--// 
                        //------------------------------------//
                          function guardarResultado() {
                            event.preventDefault();
                            // Obtener el valor del div con id "resultado"
                            var cultivo = $("#cultivo").val();
                            var tipo = $("#tipodato").val();
                            var resultado = document.getElementById("txtresultado").innerHTML;
                            
                            $.ajax({
                                    url: "modelo/guardar_resultado.php",
                                    type: "POST",
                                    data: {cultivo: cultivo, tipo: tipo, resultado: resultado},
                                    success: function(errores){
                                        $("#notificaciones").html(errores);
                                    }
                                });
                          }

                      </script>
                    </div>
        
                    </div>
                    </div>
                </form>
                </div></center>
</div>

<!-- Finalizan los modales -->

