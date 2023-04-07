<?php
    //error_reporting(0);
    $tipo_id = $_POST['tipo_id'];

    switch($tipo_id){
        // Densidad de siembra (Granos)
        case('1'):
            ?>
            <form id="dsiembra">
            <div class="form-floating mb-3">
                      <input type="text" name="perdida" class="form-control rounded-3" id="perdida" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Pérdida de semillas (%)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="margen" class="form-control rounded-3" id="margen" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Márgen de seguridad (%)</label>
                      </div>
             <div class="form-floating mb-3">
                      <input type="text" name="densidad" class="form-control rounded-3" id="densidad" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Densidad de siembra</label>
                      </div>    
             <div class="form-floating mb-3">
                      <input type="text" name="distancia" class="form-control rounded-3" id="distancia" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Distancia entre surcos (m)</label>
                      </div>   

                      <input type="hidden" name="calculo" class="form-control rounded-3" id="calculo" value="1"> 

                      <button type="submit" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg> Calcular</button>
            </form> 

                      <!-- Script -->

                      <script>
                        //------------------------------------//
                        //--Codigo para acceder al resultado--// 
                        //----Densidad de siembra granos------// 
                        //------------------------------------//
                        $(document).ready(function(){
                            $("#dsiembra").submit(function(event){
                                event.preventDefault();
                                var perdida = $("#perdida").val();
                                var margen = $("#margen").val();
                                var densidad = $("#densidad").val();
                                var distancia = $("#distancia").val();
                                var calculo = $("#calculo").val();
                                $.ajax({
                                    url: "controlador/calculadora.php",
                                    type: "POST",
                                    data: { perdida: perdida, margen: margen, densidad: densidad, distancia:distancia, calculo:calculo},
                                    success: function(resultados,unidades){
                                        $("#resultado").html(resultados,unidades);
                                        document.getElementById("resultado").scrollIntoView({ behavior: "smooth" });
                                    }
                                });
                            });
                        });
	                </script>
            <?php
        break;

        case('2'):
            // Densidad de siembra (Forrajes)
            ?>
            <form id="dsiembraf">
            <div class="form-floating mb-3">
                    <select  id="epoca" class="form-control rounded-3" id="floatingInput" required>
                    <option value="0" selected="">Seleccione:</option> 
                    <option value="1">Invierno</option>
                    <option value="2">Primavera</option>
                    </select>



                    <label for="floatingInput">Selecciona la época de siembra:</label>
                    </div>

                      <input type="hidden" name="calculo" class="form-control rounded-3" id="calculo" value="2"> 

                      <button type="submit" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg> Calcular</button>
            </form> 

                      <!-- Script -->

                      <script>
                         //------------------------------------//
                        //--Codigo para acceder al resultado--// 
                        //----Densidad de siembra forrajes----// 
                        //------------------------------------//
                        $(document).ready(function(){
                            $("#dsiembraf").submit(function(event){
                                event.preventDefault();
                                var epoca = $("#epoca").val();
                                var calculo = $("#calculo").val();
                                $.ajax({
                                    url: "controlador/calculadora.php",
                                    type: "POST",
                                    data: {epoca:epoca, calculo:calculo},
                                    success: function(resultados,unidades){
                                        $("#resultado").html(resultados,unidades);
                                         document.getElementById("resultado").scrollIntoView({ behavior: "smooth" });
                                    }
                                });
                            });
                        });
	</script>
            <?php
        break;


        case('3'):
            //Dosis de agroquímicos
            ?>
            <form id="dosis">
            <div class="form-floating mb-3">
                      <input type="text" name="consumo" class="form-control rounded-3" id="consumo" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Consumo del equipo (L/Ha)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="producto" class="form-control rounded-3" id="producto" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Cantidad de producto(L/Ha)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="concentracion" class="form-control rounded-3" id="concentracion" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Concentración del producto (%):</label>
                      </div>

                      <input type="hidden" name="calculo" class="form-control rounded-3" id="calculo" value="3"> 

                      <button type="submit" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg> Calcular</button>
            </form> 

                      <!-- Script -->

                      <script>
                        //------------------------------------//
                        //--Codigo para acceder al resultado--// 
                        //-------Dosis de agroquimicos---------// 
                        //------------------------------------//
                        $(document).ready(function(){
                            $("#dosis").submit(function(event){
                                event.preventDefault();
                                var consumo = $("#consumo").val();
                                var producto = $("#producto").val();
                                var concentracion = $("#concentracion").val();
                                var calculo = $("#calculo").val();
                                $.ajax({
                                    url: "controlador/calculadora.php",
                                    type: "POST",
                                    data: {consumo:consumo, producto:producto, concentracion:concentracion, calculo:calculo},
                                    success: function(resultados,unidades){
                                        $("#resultado").html(resultados,unidades);
                                         document.getElementById("resultado").scrollIntoView({ behavior: "smooth" });
                                    }
                                });
                            });
                        });
	</script>
            <?php
        break;



        case('4'):
            //Rendimiento estimado
            ?>
            <form id="renest">
            <div class="form-floating mb-3">
                      <input type="text" name="hectareas" class="form-control rounded-3" id="hectareas" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Área total del cultivo (Hectáreas)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="mazorca" class="form-control rounded-3" id="mazorca" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Promedio de mazorcas</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="filas" class="form-control rounded-3" id="filas" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Promedio de filas (Mazorca)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="granosfila" class="form-control rounded-3" id="granosfila" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Promedio de granos por fila (Mazorca)</label>
                      </div> 
            <div class="form-floating mb-3">
                      <input type="text" name="peso" class="form-control rounded-3" id="peso" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Peso de 1000 granos (Gramos)</label>
                      </div>     
                      <input type="hidden" name="calculo" class="form-control rounded-3" id="calculo" value="4"> 

                      <button type="submit" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg> Calcular</button>
            </form> 

                      <!-- Script -->

                      <script>
                         //------------------------------------//
                        //--Codigo para acceder al resultado--// 
                        //-------Rendimiento estimado---------// 
                        //------------------------------------//
                        $(document).ready(function(){
                            $("#renest").submit(function(event){
                                event.preventDefault();
                                var mazorca = $("#mazorca").val();
                                var filas = $("#filas").val();
                                var granosfila = $("#granosfila").val();
                                var peso = $("#peso").val();
                                var hectareas = $("#hectareas").val(); 
                                var calculo = $("#calculo").val();
                                $.ajax({
                                    url: "controlador/calculadora.php",
                                    type: "POST",
                                    data: {mazorca:mazorca,filas:filas, granosfila:granosfila, peso:peso, hectareas:hectareas, calculo:calculo},
                                    success: function(resultados,unidades){
                                        $("#resultado").html(resultados,unidades);
                                         document.getElementById("resultado").scrollIntoView({ behavior: "smooth" });
                                    }
                                });
                            });
                        });
	</script>
            <?php
        break;


        
        case('5'):
            	//Tasas de aplicación de fertilizante
            ?>
            <form id="renest">
                <h4 class="fw-light">Nutrientes</h4>
            <div class="form-floating mb-3">
                      <input type="text" name="n" class="form-control rounded-3" id="n" pattern="[0-9]+([\.,][0-9]+)?" >
                      <label for="floatingInput">Nitrogeno (N)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="p" class="form-control rounded-3" id="p" pattern="[0-9]+([\.,][0-9]+)?" >
                      <label for="floatingInput">Fósforo (P)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="k" class="form-control rounded-3" id="k" pattern="[0-9]+([\.,][0-9]+)?" >
                      <label for="floatingInput">Potasio (k)</label>
                      </div>
                <h4 class="fw-light">Medidas</h4>
            <div class="form-floating mb-3">
                      <input type="text" name="kaplicados" class="form-control rounded-3" id="kaplicados" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Kilogramos aplicados</label>
                      </div> 
            <div class="form-floating mb-3">
                      <input type="text" name="area" class="form-control rounded-3" id="area" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Área del cultivo (Hectáreas)</label>
                      </div>     
                      <input type="hidden" name="calculo" class="form-control rounded-3" id="calculo" value="5"> 

                      <button type="submit" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg> Calcular</button>
            </form> 

                      <!-- Script -->

                      <script>
                         //------------------------------------//
                        //--Codigo para acceder al resultado--// 
                        //-Tasa de aplicación de fertilizante-// 
                        //------------------------------------//
                        $(document).ready(function(){
                            $("#renest").submit(function(event){
                                event.preventDefault();
                                var n = $("#n").val();
                                var p = $("#p").val();
                                var k = $("#k").val();
                                var area = $("#area").val();
                                var kaplicados = $("#kaplicados").val();
                                var calculo = $("#calculo").val(); 
                                $.ajax({
                                    url: "controlador/calculadora.php",
                                    type: "POST",
                                    data: {n:n,p:p, k:k, area:area, kaplicados:kaplicados, calculo:calculo},
                                    success: function(resultados,unidades){
                                        $("#resultado").html(resultados,unidades);
                                         document.getElementById("resultado").scrollIntoView({ behavior: "smooth" });
                                    }
                                });
                            });
                        });
	</script>
            <?php
        break;

        default:
        echo "defecto";
    break;

     }

?>
                     