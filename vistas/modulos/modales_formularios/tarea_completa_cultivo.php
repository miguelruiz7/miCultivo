<!-- Marcar tarea completada en cultivo -->
<div class="modal top fade" id="completarid<?php echo $datos["id_plan"];?>" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-md ">
      <div class="modal-content">
        <div class="modal-body">
        <div class="col">
                 <!-- Opciones -->
                 <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                     <h5 class="fw-light text-dark text-danger">¿Deseas marcar como completado?</h5>
                  </div>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  </div>
                  
                                            <!-- Opciones consulta -->
            <div class="card-body">
              <h4 class="fw-light text-dark"><?php echo $datos["nombre_plan"];?></h4>
              <h6 class="fw-light text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> <?php echo $datos["nombre"];?></h6>
                <!-- Fecha -->
          <div class="row">
            <div class="col mb-4"><h6 class="card-text text-dark"><?php echo $datos["inicio_plan"];?> al <?php echo $datos["final_plan"];?>  </h6></div>
          </div>       
                  <form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
        <input type="hidden" name="id_plan" value="<?php echo $datos["id_plan"];?>">
        <button type="submit" name="completado" class="btn btn-outline-danger me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg> Marcar como completada</button>
          </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>