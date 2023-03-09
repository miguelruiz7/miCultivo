<!-- Eliminar cultivo -->
<div class="modal top fade" id="eliminarid<?php echo $datos["id_bitacora"];?>" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-md ">
      <div class="modal-content">
        <div class="modal-body">
        <div class="col">
                 <!-- Opciones -->
                 <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                     <h5 class="fw-light text-dark text-danger">¿Deseas eliminarlo?</h5>
                  </div>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  </div>
                  
                       <!-- Opciones consulta -->
              <div class="card-body">
            
              <h4 class="fw-light text-dark"><?php echo $datos["nombre_plan"];?></h4>
<h6 class="fw-light text-dark"><?php echo $i_ubicacion; ?> <?php echo $datos["nombre"];?></h6>
<br>

                  <form action="<?php echo basename($_SERVER['PHP_SELF'],".php");?>" method="post">
         <input type="hidden" name="cultivo_id" value="<?php echo $cultivo_id;?>">
        <input type="hidden" name="id_plan" value="<?php echo $datos["plan_id"];?>">
        <button type="submit" name="eliminar" class="btn btn-outline-danger me-2"><?php echo $i_basura; ?> Eliminar</button>
          </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>