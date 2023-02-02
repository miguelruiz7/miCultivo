<!-- Modificar cultivo -->
<div class="modal top fade" id="modificarid<?php echo $datos["id"]; ?>" tabindex="-1" aria-labelledby="modificar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="fw-light text-dark"> Modificar un cultivo </h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
               <div class="modal-body">
                <div class="modal-body p-5 pt-0">
                   <form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
                   <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-8">
                      <h4 class="fw-light text-dark">Datos principales:</h3>
                    <div class="form-floating mb-3">
                    <input type="hidden" name="id" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['id'];?>">
                      <input type="text" name="txtnombre" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['nombre'];?>">
                      <label for="floatingInput">Nombre del cultivo</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select name="txttipo" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['tipo_id'];?>">
                              <option value="<?php echo $datos['tipo_id'];?>" selected=""><?php echo $datos['nombre_c'];?></option> 
                              <?php
                              $id_tipoc = $datos['tipo_id'];
                              echo $id_tipoc;
                            include('conexion.php');
                            $generales="SELECT * FROM tipo WHERE id_c NOT IN ('$id_tipoc') ";
                            $resultado= mysqli_query($conexion,$generales);
                                while($valores= mysqli_fetch_array($resultado)){
                                    ?>
                                    <option value="<?php echo $valores['id_c'];?>"><?php echo $valores['nombre_c']; ?></option>
                                    <?php
                                }
                    ?>
                      </select>
                      <label for="floatingInput">Tipo de cultivo</label>
                      </div>
                      </div>
                      
                      <div class="col">
                      <h4 class="fw-light text-dark">Fechas del proceso:</h3>
                        <div class="form-floating mb-3">
                      <input type="date" title="Se entiende por fecha de inicio, a partir de la siembra del cultivo" name="txtfi" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['inicio'];?>">
                      <label for="floatingInput">Inicio del cultivo <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </svg></label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="date"  title="Se entiende por finalización de cultivo, a partir de la cosecha del cultivo" name="txtff" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['final'];?>">
                      <label for="floatingInput">Finalización del cultivo <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </svg></label>
                      </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtubicacion" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['ubicacion'];?>">
                      <label for="floatingInput">Ubicación:</label>
                    </div>
                      </div>
                      </div>
                      
                        <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtdescripcion" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['descripcion'];?>">
                      <label for="floatingInput">Descripción</label>
                      </div>
                     
                    
                      
                      <section class="container">
                              <h4 class="fw-light text-dark">Métricas</h4>
                        </section>
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtarea" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['area'];?>">
                      <label for="floatingInput">Area total del cultivo (Hectarea)</label>
                    </div>
                      </div>
                      
                      <div class="col">
                    <div class="form-floating mb-3">
                      <input type="text" name="txtreni" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['rendimiento'];?>">
                      <label for="floatingInput">Rendimiento esperado (Toneladas)</label>
                    </div>
                      </div>
                      
                    </div>
                  </div>
                  
                  </div></center>
                            </div>
        <div class="modal-footer">
          <button type="submit" name="actualizar" class="btn btn-outline-success me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
  </svg> Actualizar</button>
          <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
  </svg> Cerrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
