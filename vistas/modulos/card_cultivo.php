<div class="col">
          <div class="card shadow-sm">
               <!-- Opciones -->
               <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#modificarid<?php echo $datos["id"]; ?>"><?php echo $i_modificar; ?> Modificar /  <?php echo $i_ver; ?> Ver</button>
                  <button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#eliminarid<?php echo $datos["id"]; ?>"><?php echo $i_basura; ?> Eliminar</button>
                </div>
                </div>
                </div>
                
                     <!-- Opciones consulta -->
            <div class="card-body">
              <h4 class="fw-light"><?php echo $datos["nombre"];?></h4>
              <h6 class="fw-light"><?php echo $i_ubicacion; ?> <?php echo $datos["ubicacion"];?></h6>
     <!-- Barra de progreso -->        
<?php include('progreso_barra_cultivo.php'); ?>  


<form action="bitacora" class="btn btn-sm p-0" method="get"><input type="hidden" name="id_cultivo" value="<?php echo $datos["id"];?>"><button type="submit" name="ver" class="btn btn-sm btn-outline-light"><?php echo $i_bitacora; ?> Bitácora</button></form>
<button type="submit" name="ver" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#tareaid<?php echo $datos["id"]; ?>"><?php echo $i_modificar; ?> Ver tareas</button>


<div class="container">
  <?php
  include('vistas/modulos/modales_formularios/actualizar_cultivo.php');
  include('vistas/modulos/modales_formularios/planificar_cultivo.php');
  include('vistas/modulos/modales_formularios/eliminar_cultivo.php');
  include('vistas/modulos/modales_formularios/tareas_cultivo.php');
  ?>
</div>
                </div>
              </div>
            </div> 