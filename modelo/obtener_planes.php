<?php
    include('../controlador/conexion.php');
$cultivo_id = $_POST['plan_id'];
    $planes = array();

    // Consulta a la base de datos para obtener los planes de la marca seleccionada
    $query = "SELECT * FROM c_planificar WHERE cultivo_id = $cultivo_id";
    $result = mysqli_query($conexion, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $planes[] = $row;
    }
    ?>
        <select name="txtplan" class="form-control rounded-3" id="floatingInput">
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
   <?php
?>
                     