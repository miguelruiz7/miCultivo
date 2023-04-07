<!-- Modal - Usuario -->
<div class="modal fade" id="usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Acerca del usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <!-- Detalles -->
                        <center> 

      <div class="modal-body p-5 pt-0">
         <form action="<?php echo htmlspecialchars(basename($_SERVER['PHP_SELF'],'.php')); ?>" method="post">
          <div class="form-floating mb-3">
            <input type="text" name="nombre" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" value="<?php echo $columnasdatos['nombre']; ?>" >
            <label for="floatingInput">Nombre completo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="usuario" class="form-control rounded-3" id="floatingInput" value="<?php echo $columnasdatos['usuario']; ?>" readonly>
            <label for="floatingInput">Usuario</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="correo" class="form-control rounded-3" id="floatingInput" value="<?php echo $columnasdatos['correo']; ?>">
            <label for="floatingInput">Correo</label>
          </div>
                        </center>
                          </div>
                          <div class="modal-footer">
                          <button type="submit" name="btnusr" class="btn btn-danger">Aceptar</button>
                    </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>