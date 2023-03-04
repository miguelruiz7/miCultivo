<?php
    include('../controlador/conexion.php');
$cultivo_id = $_POST['plan_id'];
    $planes = array();

    // Consulta a la base de datos para obtener los planes de la marca seleccionada
    $query = "SELECT * FROM plan WHERE cultivo_id = $cultivo_id AND completado = 0";
    $result = mysqli_query($conexion, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $planes[] = $row;
    }
    ?>
        <select name="txtplan" id="txtplan" class="form-control rounded-3" id="floatingInput" required>
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
 <div class="checkbox mb-4">
      <label>
        <input type="checkbox" name="completar"> Marcar cómo completado
      </label>
    </div>
   <?php
?>
                     