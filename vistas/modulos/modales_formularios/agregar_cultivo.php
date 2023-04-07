<!-- Modal -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <h3 class="fw-light text-dark"> Agregar un cultivo </h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="container" id="notificacionescul">
          </div>
      <form id="addcrop">
                   <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-8">
                      <h4 class="fw-light text-dark">Datos principales:</h3>
                    <div class="form-floating mb-3">
                      <input type="text" name="txtnombre" id="txtnombre" class="form-control rounded-3" id="floatingInput" required>
                      <label for="floatingInput">Nombre del cultivo</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select name="txttipo" id="txttipo" class="form-control rounded-3" id="floatingInput" required>
                              <option value="" selected="">Seleccione:</option> 
                              <?php
                            $conecta = new conexionDB();
                            $conecta -> miCultivo();
                            $conexion = $conecta ->conexionmiCultivo;
                            $generales="SELECT * FROM tipo";
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
                      <input type="date" title="Se entiende por fecha de inicio, a partir de la siembra del cultivo" name="txtfi" id="txtfi" class="form-control rounded-3" id="floatingInput" required>
                      <label for="floatingInput">Inicio del cultivo <?php echo $i_info; ?></label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="date"  title="Se entiende por finalización de cultivo, a partir de la cosecha del cultivo" name="txtff" id="txtff" class="form-control rounded-3" id="floatingInput" required>
                      <label for="floatingInput">Finalización del cultivo <?php echo $i_info; ?></label>
                      </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtubicacion" id="txtubicacion" class="form-control rounded-3" id="floatingInput" required>
                      <label for="floatingInput">Ubicación:</label>
                    </div>
                      </div>
                      </div>
                      
                        <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtdescripcion" id="txtdescripcion" class="form-control rounded-3" id="floatingInput" required>
                      <label for="floatingInput">Descripción</label>
                      </div>
                     
                    
                      
                      <section class="container">
                              <h4 class="fw-light text-dark">Métricas</h4>
                        </section>
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtarea" id="txtarea" class="form-control rounded-3" id="floatingInput" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Area total del cultivo (Hectáreas) <?php echo $i_numeros; ?></label>
                    </div>
                      </div>
                      
                      <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="text" name="txtreni" id="txtreni" class="form-control rounded-3" id="floatingInput" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">Rendimiento esperado (Toneladas) <?php echo $i_numeros; ?></label>
                    </div>
                      </div>
                      
                    </div>
                  </div>                  
                  </div></center>
                            </div>
        <div class="modal-footer">
          
          <button type="button"  name="agregar" id="agregar" onclick="insertar()" class="btn btn-outline-success me-2" ><?php echo $i_adiccionar; ?> Agregar</button>
          <button type="button" id="cerrarCul"  class="btn btn-outline-secondary me-2" data-bs-dismiss="modal" ><?php echo $i_cerrar; ?> Cerrar</button>

          </form>
        </div>
    </div>
  </div>
</div>