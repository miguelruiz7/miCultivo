<!-- Modal - Sesiones -->
<div class="modal fade" id="sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Inicios de sesión</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <div class= "table-responsive">
  <table class="table text-center">
    <thead>
      <tr class="table-dark">
        <th scope="col">IP</th>
        <th scope="col">Fecha</th>
        <th scope="col">Dispositivo</th>
      </tr>  
      </thead>
      <tbody>
        <?php
        include('controlador/conexion.php');
        $consulta="SELECT * FROM historial_sesiones WHERE usuario='$sesion' ORDER BY hora DESC
        LIMIT 5";
        $resultado=mysqli_query($conexion,$consulta);
        $filas = mysqli_num_rows($resultado);
        if($filas > 0){
        while ($columnas = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?php echo $columnas['ip']; ?></td>
            <td><?php echo $columnas['hora']; ?></td>
            <td><?php echo $columnas['nombre_dispositivo']; ?></td>
        </tr>
          <?php
            }
        }
        ?>
      </tbody>
  </table>
  </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>