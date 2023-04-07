<!-- Bitacorar cultivo -->
<div class="modal top fade" id="bitacora" tabindex="-1" aria-labelledby="agregarbitacora" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="fw-light text-dark">Agregar una bitacora</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
               <div class="modal-body">
                 <div class="container" id="notificacionesbit">
          </div>
                <div class="modal-body p-1 pt-0">
                   <form id="addbit">
                   <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-12">
                   <div class="form-floating mb-3">

                    <select name="txtcultivo" id="idcultivo_bit" class="form-control rounded-3" id="floatingInput" required>
                              <option value="" selected="">Seleccione:</option> 
                              <?php echo mostrarcultivos(sesion()); ?>
                      </select>
                      <label for="floatingInput">Selecciona el cultivo:</label>
                    </div>
                    
                    <div id="planes" class="form-floating mb-3">
                      <!-- Aqui deben aparecer los planes -->
                      </div>
                      </div>
                      
                      
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtlugar" id="txtlugar" class="form-control rounded-3" id="floatingInput" required>
                      <label for="floatingInput">Ubicación:</label>
                    </div>
                      </div>
                      </div>
                      
                        <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <textarea type="text" name="txtdescripcion" id="txtdesarollo" class="form-control rounded-3" id="floatingInput" required></textarea>
                      <label for="floatingInput">Descripción</label>
                      </div>
                  </div>
                  
                 
                  
                  </div></center>
                            </div>
        <div class="modal-footer">
          <button type="button" id="agregarbit" name="agregarbit" onclick="insertarbitacora()" class="btn btn-outline-success me-2" ><?php echo $i_adiccionar; ?> Agregar</button>
          <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal"><?php echo $i_cerrar; ?> Cerrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>