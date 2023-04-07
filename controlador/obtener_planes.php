<?php
   
error_reporting(0);
$cultivo_id = $_POST['plan_id'];
    $planes = array();
  include('../config/conexion.php');
 $conecta = new conexionDB();
        $conecta -> miCultivo();
        $conexion = $conecta ->conexionmiCultivo;
    // Consulta a la base de datos para obtener los planes de la marca seleccionada
    $query = "SELECT * FROM plan WHERE cultivo_id = $cultivo_id AND completado = 0";
    $result = mysqli_query($conexion, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $planes[] = $row;
    }
    ?>
        <select name="txtplan" id="txtplan" class="form-control rounded-3 mb-3" id="floatingInput" required>
            <option value="0" selected="">Seleccione:</option> 
    <?php
    // Mostramos el select de planes.
    foreach($planes as $plan) {
        ?>
        <option value="<?php echo $plan['id_plan'];?>"><?php echo $plan['nombre_plan']; ?></option>
    <?php
    }
  ?>
 </select>
 <label for="floatingInput">Selecciona el plan:</label>
 <div class="form-floating mb-3">  
 <select name="completar" id="completar" class="form-control rounded-3" id="floatingInput" required>
            <option value="si" >Si</option> 
            <option value="no" selected="">No</option> 
 </select>
<label for="floatingInput">¿Quiere marcarlo como acompletado?</label>
</div>
   <?php
?>
                     