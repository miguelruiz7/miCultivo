<!-- Modificar cultivo -->
<div class="modal top fade" id="planificar<?php echo $datos["id"]; ?>" tabindex="-1" aria-labelledby="modificar" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="fw-light text-dark"> ¿Qué actividad desea agregar a su plan?</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
               <div class="modal-body">
                <div class="modal-body p-5 pt-0">
                   <form action="<?php echo basename($_SERVER['PHP_SELF'],".php");?>" method="post">
                   <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-12">
                      <h4 class="fw-light text-dark">Datos principales:</h3>
                    <div class="form-floating mb-3">
                    <input type="hidden" name="idcultivo" class="form-control rounded-3" id="floatingInput" value="<?php echo $datos['id'];?>">
                      <input type="text" name="txtnombre" class="form-control rounded-3" id="floatingInput">
                      <label for="floatingInput">Nombre del plan</label>
                    </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                      <input type="date" title="Se entiende por fecha de inicio, a partir de la siembra del cultivo" name="txtini" class="form-control rounded-3" id="floatingInput" >
                      <label for="floatingInput">Inicio del proceso <?php echo $i_info; ?></label>
                    </div>

                    
                    
                      </div>
                      <div class="col-md-6">
                      <div class="form-floating mb-3">
                      <input type="date"  title="Se entiende por finalización de cultivo, a partir de la cosecha del cultivo" name="txtfin" class="form-control rounded-3" id="floatingInput">
                      <label for="floatingInput">Finalización del procesos <?php echo $i_info; ?></label>
                      </div>
                      </div>
                      </div>
                      
                      
                        <div class="col-md-12">
                        <div class="form-floating mb-3">
                      <input type="text" name="txtdescripcion" class="form-control rounded-3" id="floatingInput" required>
                      <label for="floatingInput">Descripción</label>
                      </div>
                     
                    
                      
                      <section class="container">
                              <h4 class="fw-light text-dark">Recursos</h4>
                        </section>
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                      <input type="text" name="txthum" class="form-control rounded-3" id="floatingInput" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">¿Cuantas personas se ocuparan? <?php echo $i_numeros; ?></label>
                    </div>
                      </div>
                      
                      <div class="col-md-6">
                    <div class="form-floating mb-3">
                      <input type="text" name="txtpto" class="form-control rounded-3" id="floatingInput" pattern="[0-9]+([\.,][0-9]+)?" required>
                      <label for="floatingInput">¿Cuanto es el presupuesto? <?php echo $i_moneda; ?></label>
                    </div>
                      </div>

                      <div class="col-md-12">
                    <div class="form-floating mb-3">
                      <input type="text" name="txtmat" class="form-control rounded-3" id="floatingInput" required>
                      <label for="floatingInput">¿Qué materiales se ocuparán?</label>
                    </div>
                      </div>
                      
                    </div>
                  </div>
                  
                  </div></center>
                            </div>
        <div class="modal-footer">
          <button type="submit" name="agregarplan" class="btn btn-outline-success me-2"><?php echo $i_adiccionar; ?> Agregar</button>
          <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal"><?php echo $i_cerrar; ?> Cerrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
