<!-- Bitacorar cultivo -->
<div class="modal top fade" id="agregarbitacora" tabindex="-1" aria-labelledby="agregarbitacora" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="fw-light text-dark">Agregar una bitacora</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
               <div class="modal-body">
                <div class="modal-body p-5 pt-0">
                   <form id="bitacora" action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
                   <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-12">
                    <div class="form-floating mb-3">

                    <select name="txtcultivo" id="cultivo" class="form-control rounded-3" id="floatingInput" required>
                              <option value="" selected="">Seleccione:</option> 
                              <?php
                           // include('conexion.php');
                            $generales="SELECT * FROM cultivo";
                            $resultado= mysqli_query($conexion,$generales);
                                while($valores= mysqli_fetch_array($resultado)){
                                    ?>
                                    <option value="<?php echo $valores['id'];?>"><?php echo $valores['nombre']; ?></option>
                                    <?php
                                }
                    ?>
                      </select>
                      <label for="floatingInput">Selecciona el cultivo:</label>
                    </div>
                    <div id="planes" class="form-floating mb-3">
                      <!-- Aqui deben aparecer los planes -->
                      </div>
                      </div>
                      
                      <!--<div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="date" title="Se entiende por fecha de inicio, a partir de la siembra del cultivo" name="txtfecha" class="form-control rounded-3" id="floatingInput">
                      <label for="floatingInput">Fecha: <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </svg></label>
                    </div>
                      </div> -->
                      
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
          <button type="submit" id="enviarBit" name="agregarbit" class="btn btn-outline-success me-2" ><?php echo $i_adiccionar; ?> Agregar</button>
          <button type="button" onclick="limpiarCamposBit()" id="cerrarBit" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal"><?php echo $i_cerrar; ?> Cerrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>