<!-- Bitacorar cultivo -->
<div class="modal top fade" id="agregarbitacora" tabindex="-1" aria-labelledby="agregar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="fw-light text-dark">Agregar una bitacora</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
               <div class="modal-body">
                <div class="modal-body p-5 pt-0">
                   <form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
                   <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-12">
                    <div class="form-floating mb-3">

                    <select name="cultivo" id="cultivo" class="form-control rounded-3" id="floatingInput">
                              <option value="0" selected="">Seleccione:</option> 
                              <?php
                            include('conexion.php');
                            $generales="SELECT * FROM c_datos";
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
                      
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="date" title="Se entiende por fecha de inicio, a partir de la siembra del cultivo" name="txtfi" class="form-control rounded-3" id="floatingInput">
                      <label for="floatingInput">Fecha: <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </svg></label>
                    </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtubicacion" class="form-control rounded-3" id="floatingInput">
                      <label for="floatingInput">Ubicación:</label>
                    </div>
                      </div>
                      </div>
                      
                        <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <textarea type="text" name="txtdescripcion" class="form-control rounded-3" id="floatingInput"></textarea>
                      <label for="floatingInput">Descripción</label>
                      </div>
                  </div>
                  
                  </div></center>
                            </div>
        <div class="modal-footer">
          <button type="submit" name="agregar" class="btn btn-outline-success me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg> Agregar</button>
          <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
  </svg> Cerrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>