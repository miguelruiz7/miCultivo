<!-- Contiene la vista de calculadora -->
<section class="py-5 container">
  <!-- Notificaciones -->
<div id="notificaciones"></div>
    <div class="row py-lg-5">
      <div class="col-lg-12">
        <h1 class="fw-light"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg> Calculadora</h1>
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

