<!-- Ver cultivo -->
<div class="modal top fade" id="detalles<?php echo $datos["id_bitacora"];?>" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-md ">
      <div class="modal-content">
        <div class="modal-body">
        <div class="col">
                 <!-- Opciones -->
                 <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                     <h5 class="fw-light text-dark text-danger">Descripción</h5>
                  </div>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  </div>
                  
                       <!-- Opciones consulta -->
              <div class="card-body">
            
              <h4 class="fw-light text-dark"><?php echo $datos["nombre_plan"];?></h4>
             <!-- <h6 class="fw-light text-dark">Publicado el: <?php echo $datos["fecha"];?></h6> -->
              <h6 class="fw-light text-dark"><?php echo $datos["descripciones"];?></h6>
<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>