<!-- Modificar cultivo -->
<div class="modal top fade" id="modificarid<?php echo $datos["id"]; ?>" tabindex="-1" aria-labelledby="modificar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="fw-light text-dark"> Modificar un cultivo </h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
               <div class="modal-body">
                <div class="modal-body p-1 pt-0">
                   <form action="<?php echo basename($_SERVER['PHP_SELF'],".php");?>" method="post">
                   <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-8">
                      <h4 class="fw-light text-dark">Datos principales:</h3>
                    <div class="form-floating mb-3">
                    <input type="hidden" name="id" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['id'];?>" required>
                      <input type="text" name="txtnombre" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['nombre'];?>" required>
                      <label for="floatingInput">Nombre del cultivo</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select name="txttipo" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['tipo_id'];?>" required>
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
                      <input type="date" title="Se entiende por fecha de inicio, a partir de la siembra del cultivo" name="txtfi" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['inicio'];?>" required>
                      <label for="floatingInput">Inicio del cultivo <?php echo $i_info; ?></label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="date"  title="Se entiende por finalización de cultivo, a partir de la cosecha del cultivo" name="txtff" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['final'];?>" required>
                      <label for="floatingInput">Finalización del cultivo <?php echo $i_info; ?></label>
                      </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtubicacion" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['ubicacion'];?>" required>
                      <label for="floatingInput">Ubicación:</label>
                    </div>
                      </div>
                      </div>
                      
                        <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtdescripcion" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['descripcion'];?>" required>
                      <label for="floatingInput">Descripción</label>
                      </div>
                     
                    
                      
                      <section class="container">
                              <h4 class="fw-light text-dark">Métricas</h4>
                        </section>
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtarea" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['area'];?>" pattern="[0-9]+([\.,][0-9]+)?"  required>
                      <label for="floatingInput">Area total del cultivo (Hectáreas) <?php echo $i_numeros; ?></label>
                    </div>
                      </div>
                      
                      <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="text" name="txtreni" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['rendimiento'];?>" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Rendimiento esperado (Toneladas) <?php echo $i_numeros; ?></label>
                    </div>
                      </div>
                      
                    </div>
                  </div>
                  
                  </div></center>
                            </div>
        <div class="modal-footer">
          <button type="submit" name="actualizar" class="btn btn-outline-success me-2"><?php echo $i_modificar; ?> Actualizar</button>
          <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal"><?php echo $i_cerrar; ?> Cerrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
