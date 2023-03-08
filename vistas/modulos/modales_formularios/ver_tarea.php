<!-- Ver cultivo -->
<div class="modal top fade" id="detalles<?php echo $datos["id_plan"];?>" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
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
              <h6 class="fw-light text-dark"><?php echo $datos["periodo"];?></h6>
              <h6 class="fw-light text-dark"><?php echo $datos["descripcion_p"];?></h6>
              <h5 class="fw-light text-dark text-danger">Recursos:</h5>
              <div class="container">
              
                      <div class="row align-items-start">
                        <div class="col">
                          <h5 class="fw-light text-dark text-danger"><?php echo $i_humanos; ?> Humanos: <?php echo $datos["recurso_hum"];?></h5>
                        </div>
                        <div class="col">
                          <h5 class="fw-light text-dark text-danger"><?php echo $i_moneda; ?> Economicos: $<?php echo $datos["recurso_econ"];?></h5>
                        </div>
                      </div>
                      <div class="row align-items-start">
                        <div class="col">
                          <h5 class="fw-light text-dark text-danger"><?php echo $i_lista; ?> Materiales:</h5>
                        </div>
                        <div class="row align-items-start">
                        <div class="col">
                        <h6 class="fw-light text-dark"><?php echo $datos["recurso_mat"];?></h6>
                        </div>
                  </div>
                  </div>
                  </div>
<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>