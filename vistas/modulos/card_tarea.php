<div class="col">
          <div class="card shadow-sm">
               <!-- Opciones -->
               <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#completarid<?php echo $datos["id_plan"]; ?>"><?php echo $i_verificado; ?> Marcar como completada</button>
                </div>
                </div>
                </div>
                
                     <!-- Opciones consulta -->
            <div class="card-body">
              <h4 class="fw-light"><?php echo $datos["nombre_plan"];?></h4>
              <h6 class="fw-light"><?php echo $i_ubicacion; ?> <?php echo $datos["nombre"];?></h6>
                <!-- Fecha -->
          <div class="row">
            <div class="col mb-4"><h6 class="card-text"><?php echo $datos["periodo"];?></h6></div>
          </div>
          
          <button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#detalles<?php echo $datos["id_plan"]; ?>"><?php echo $i_externo; ?> Ver descripción</button>

<div class="container">
  <?php
  include('vistas/modulos/modales_formularios/tarea_completa_cultivo.php');
  include('vistas/modulos/modales_formularios/ver_tarea.php');
  ?>
</div>
                </div>
              </div>
            </div> 