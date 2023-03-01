<?php
    //error_reporting(0);
    $tipo_id = $_POST['tipo_id'];

    switch($tipo_id){
        case('1'):
            ?>
            <form id="dsiembra">
            <div class="form-floating mb-3">
                      <input type="text" name="perdida" class="form-control rounded-3" id="perdida">
                      <label for="floatingInput">Perdida de semillas</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="margen" class="form-control rounded-3" id="margen">
                      <label for="floatingInput">Margen de seguridad</label>
                      </div>
             <div class="form-floating mb-3">
                      <input type="text" name="densidad" class="form-control rounded-3" id="densidad">
                      <label for="floatingInput">Densidad de siembra</label>
                      </div>    
             <div class="form-floating mb-3">
                      <input type="text" name="distancia" class="form-control rounded-3" id="distancia">
                      <label for="floatingInput">Distancia entre surcos (m)</label>
                      </div>   

                      <input type="hidden" name="calculo" class="form-control rounded-3" id="calculo" value="1"> 

                      <button type="submit" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg> Calcular</button>
            </form> 

                      <!-- Script -->

                      <script>
	$(document).ready(function(){
	    $("#dsiembra").submit(function(event){
			event.preventDefault();
	        var perdida = $("#perdida").val();
	        var margen = $("#margen").val();
	        var densidad = $("#densidad").val();
            var distancia = $("#distancia").val();
	        var calculo = $("#calculo").val();
	        $.ajax({
	            url: "modelo/calculadora.php",
	            type: "POST",
	            data: { perdida: perdida, margen: margen, densidad: densidad, distancia:distancia, calculo:calculo},
	            success: function(resultados,unidades){
	                $("#resultado").html(resultados,unidades);
	            }
	        });
	    });
	});
	</script>
            <?php
        break;

        case('2'):
            ?>
            <form id="dsiembraf">
            <div class="form-floating mb-3">
                    <select  id="epoca" class="form-control rounded-3" id="floatingInput">
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
	$(document).ready(function(){
	    $("#dsiembraf").submit(function(event){
			event.preventDefault();
	        var epoca = $("#epoca").val();
	        var calculo = $("#calculo").val();
	        $.ajax({
	            url: "modelo/calculadora.php",
	            type: "POST",
	            data: {epoca:epoca, calculo:calculo},
	            success: function(resultados,unidades){
	                $("#resultado").html(resultados,unidades);
	            }
	        });
	    });
	});
	</script>
            <?php
        break;


        case('3'):
            ?>
            <form id="dosis">
            <div class="form-floating mb-3">
                      <input type="text" name="consumo" class="form-control rounded-3" id="consumo">
                      <label for="floatingInput">Consumo del equipo (L/Ha)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="producto" class="form-control rounded-3" id="producto">
                      <label for="floatingInput">Cantidad de producto(L/Ha)</label>
                      </div>
            <div class="form-floating mb-3">
                      <input type="text" name="concentracion" class="form-control rounded-3" id="concentracion">
                      <label for="floatingInput">Concentración del producto (%):</label>
                      </div>

                      <input type="hidden" name="calculo" class="form-control rounded-3" id="calculo" value="3"> 

                      <button type="submit" class="btn btn-outline-light me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
</svg> Calcular</button>
            </form> 

                      <!-- Script -->

                      <script>
	$(document).ready(function(){
	    $("#dosis").submit(function(event){
			event.preventDefault();
	        var consumo = $("#consumo").val();
            var producto = $("#producto").val();
            var concentracion = $("#concentracion").val();
	        var calculo = $("#calculo").val();
	        $.ajax({
	            url: "modelo/calculadora.php",
	            type: "POST",
	            data: {consumo:consumo, producto:producto, concentracion:concentracion, calculo:calculo},
	            success: function(resultados,unidades){
	                $("#resultado").html(resultados,unidades);
	            }
	        });
	    });
	});
	</script>
            <?php
        break;

        


        default:
            echo "defecti";
        break;

     }

?>
                     