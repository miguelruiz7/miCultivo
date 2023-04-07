 <?php
          
          $fecha1= new DateTime(date('y-m-d'));
          $fecha2= new DateTime($datos["inicio"]);
          $fecha3= new DateTime($datos["final"]);

          $diascontados = $fecha2->diff($fecha1);
          $diastotales = $fecha2->diff($fecha3);
          $diasfaltantes = $fecha1->diff($fecha2);
          // El resultados
          $dc = $diascontados->days;
          $dt = $diastotales->days;
          $df = $diasfaltantes->days;
          $valorbarra = ($dc*100)/$dt;
          if($fecha1 >= $fecha2)
          {
          ?>
           
          <div class="row">
            <div class="col mb-4"><h6 class="card-text"><?php if($valorbarra>100){echo "Progreso: 100% completado";}else{echo "Progreso: ".round($valorbarra)."%";} ?></h6><div class="progress" title="<?php if($valorbarra>100){echo "Progreso: 100% completado";}else{echo "Progreso: ".round($valorbarra)."% (".$dc." días de ".$dt." días)";}?>" style="height: 5px;">
  <div class="progress-bar bg-warning " role="progressbar" style="width: <?php echo round($valorbarra);?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div></div>
          </div>
          <?php }else{?>
          <div class="row">
            <div class="col mb-4"><h6 class="card-text">Iniciará en <?php echo $df;?> <?php if($df>1){echo 'días';}else{echo 'día';}?> </h6><div class="progress" title="Iniciara en <?php echo $df;?> <?php if($df>1){echo 'días';}else{echo 'día';}?>" style="height: 5px;">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div></div>
          </div>
          <?php }?>