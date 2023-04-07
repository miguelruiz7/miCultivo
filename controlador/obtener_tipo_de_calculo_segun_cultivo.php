<?php
    error_reporting(0);
    include('../config/conexion.php');
   $conecta = new conexionDB();
          $conecta -> miCultivo();
          $conexion = $conecta ->conexionmiCultivo;
    $cultivo_id = $_POST['cultivo_id'];


    //Seleciona el tipo de id segun corresponda esta la guarda en una variable para proceder a buscar el tipo de calculo
    $seltipo=mysqli_query($conexion,"SELECT * FROM cultivo WHERE id='$cultivo_id'");
    if(mysqli_num_rows($seltipo)>0){
        $tipo_aidi= mysqli_fetch_array($seltipo);
        $tipo_id = $tipo_aidi['tipo_id'];
    }

    $tipos = array();

    // Consulta a la base de datos para obtener los tipos de la marca seleccionada
    $query = "SELECT * FROM calculo WHERE tipo_id IN ($tipo_id, 99)";
    $result = mysqli_query($conexion, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $tipos[] = $row;
    }
    ?>
        <select name="txttipo" id="tipodato" class="form-control rounded-3" id="floatingInput">
            <option value="0" selected="">Seleccione:</option> 
    <?php
    // Mostramos el select de tipos.
    foreach($tipos as $tipo) {
        ?>
        <option value="<?php echo $tipo['id'];?>"><?php echo $tipo['nombre']; ?></option>
    <?php
    }
  ?>
 </select>
 <label for="floatingInput">Selecciona el tipo:</label>
 <script>
    $(document).ready(function(){
    $("#tipodato").change(function(){
        const resultados = document.querySelector('#resultado');
        var tipo_id = $(this).val();
        $.ajax({
            url: "controlador/obtener_datos_calculo.php",
            type: "POST",
            data: {tipo_id: tipo_id},
            success: function(data){
                $("#muestra").html(data);
                $("#resultado").html("");
            }
        });

        if(tipo_id==0){
            $('#muestra').html('');
        }
    });
});
 </script>
   <?php
   
?>
                     