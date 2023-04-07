   <!-- Modal - Eliminar cuenta -->
   <div class="modal fade" id="delcuenta" tabindex="-1" aria-labelledby="delcuenta" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="delcuenta">Elimina tu cuenta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <!-- Detalles -->
                        <center> 
 <p class="mb-0 opacity-75 text-danger">¿Deseas eliminar tu cuenta?, Esta accion no se puede deshacer</p>
 <p class="mb-0 opacity-75">Ingresa tu contraseña para continuar:</p>
 </br>
      <div class="modal-body p-5 pt-0">
         <form class="" action="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>" method="post">
          <div class="form-floating mb-3">
            <input type="password" name="oldpassword" class="form-control rounded-3" id="floatingPassword" placeholder="Password" value="<?php if(isset ($password)){ echo $password;} ?>">
            <label for="floatingPassword">Contraseña</label>
          </div>
                        </center>
                          </div>
                          <div class="modal-footer">
                          <button type="submit" name="btndel" class="btn btn-danger">Aceptar</button>
                    </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>