             
        <!-- Modal - Contraseña -->
        <div class="modal fade" id="contraseña" tabindex="-1" aria-labelledby="contraseña" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="contraseña">Contraseña</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <!-- Detalles -->
                        <center> 

      <div class="modal-body p-5 pt-0">
         <form class="" action="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>" method="post">
          <div class="form-floating mb-3">
            <input type="password" name="oldpassword" class="form-control rounded-3" id="floatingPassword" placeholder="Password" value="<?php if(isset ($password)){ echo $password;} ?>">
            <label for="floatingPassword">Contraseña</label>
          </div>
             <!-- Notificaciones -->
 <?php if(!empty($errorpwdmain)): ?>
               <center><div class="link-danger">
                    <ul><?php echo $errorpwdmain; ?></ul>
            </div></center> 
            <?php endif; ?>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password"  value="<?php if(isset ($passwordnew)){ echo $passwordnew;} ?>" >
            <label for="floatingPassword">Contraseña nueva</label>
          </div>
             <!-- Notificaciones -->
 <?php if(!empty($errorpwd)): ?>
               <center><div class="link-danger">
                    <ul><?php echo $errorpwd; ?></ul>
            </div></center> 
            <?php endif; ?>
          <div class="form-floating mb-3">
            <input type="password" name="password2" class="form-control rounded-3" id="floatingPassword" placeholder="Password" value="<?php if(isset ($passwordnewc)){ echo $passwordnewc;} ?>">
            <label for="floatingPassword">Confirmar contraseña nueva</label>
          </div>
                        </center>
                          </div>
                          <div class="modal-footer">
                          <button type="submit" name="btnpwd" class="btn btn-danger">Aceptar</button>
                    </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    