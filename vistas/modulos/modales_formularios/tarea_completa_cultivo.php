<!-- Marcar tarea completada en cultivo -->
<div class="modal top fade" id="completarid<?php echo $datos["id_plan"];?>" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-md ">
      <div class="modal-content">
        <div class="modal-body">
        <div class="col">
                 <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                     <h5 class="fw-light text-dark text-danger">¿Deseas marcar como completado?</h5>
                  </div>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  </div>
                  
            <div class="card-body">
              <h4 class="fw-light text-dark"><?php echo $datos["nombre_plan"];?></h4>
              <h6 class="fw-light text-dark"><?php echo $i_ubicacion; ?> <?php echo $datos["nombre"];?></h6>
                <!-- Fecha -->
          <div class="row">
            <div class="col mb-4"><h6 class="card-text text-dark"><?php echo $datos["inicio_plan"];?> al <?php echo $datos["final_plan"];?>  </h6></div>
          </div>       
                  <form action="<?php echo basename($_SERVER['PHP_SELF'],".php");?>" method="post">
        <input type="hidden" name="id_plan" value="<?php echo $datos["id_plan"];?>">
        <button type="submit" name="completado" class="btn btn-outline-danger me-2"><?php echo $i_verificado; ?> Marcar como completada</button>
          </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>