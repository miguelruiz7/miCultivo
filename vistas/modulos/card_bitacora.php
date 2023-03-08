<div class="col">
          <div class="card shadow-sm">
               <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#eliminarid<?php echo $datos["id_bitacora"]; ?>"><?php echo $i_basura; ?> Eliminar</button>
                </div>
                </div>
                </div>
            <div class="card-body">
              <h4 class="fw-light"><?php echo $datos["nombre_plan"];?></h4>
<h6 class="fw-light"><?php echo $i_ubicacion; ?> <?php echo $datos["nombre"];?></h6>
<br>
<button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#detalles<?php echo $datos["id_bitacora"]; ?>"><?php echo $i_externo; ?> Ver detalles</button>
<div class="container">
  <?php
  include('vistas/modulos/modales_formularios/eliminar_bitacora.php');
  include('vistas/modulos/modales_formularios/ver_bitacora.php');
  ?>
</div>
                </div>
              </div>
            </div> 