<!-- Tareas cultivo -->
<div class="modal top fade" id="tareaid<?php echo $datos["id"]; ?>" tabindex="-1" aria-labelledby="modificar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="fw-light text-dark"> Tareas</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
               <div class="modal-body">
                <div class="modal-body p-1 pt-0">
                  <div class="table-responsive">
                  <table class="table">
               
                <?php 
                $cultivo_id = $datos["id"];
                echo mostrartareascultivo($cultivo_id);
                ?>
               
                  </table>
                  </div>
                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal"><?php echo $i_cerrar; ?> Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  </div>
