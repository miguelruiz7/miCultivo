<?php
function mostrarinfocultivo($sesion){
        //Incluimos los iconos
        include('vistas/iconos.php');
        $conecta = new conexionDB();
        $conecta -> miCultivo();
        $conexion = $conecta ->conexionmiCultivo;
    
        $consulta = mysqli_query($conexion, "SELECT id, nombre, tipo_id, nombre_c, ubicacion, inicio, final, descripcion, area, rendimiento FROM cultivo, tipo WHERE cultivo.tipo_id=tipo.id_c AND usuario_id='$sesion'");
        if (mysqli_num_rows($consulta)>0)
        {
            $cultivos = "";
            while ($datos = mysqli_fetch_array($consulta)) {
            include('vistas/modulos/card_cultivo.php'); 
            }
            return $cultivos;
    
        }else{
            include('vistas/modulos/card_cultivo_vacio.php');  
        }
    }

    function mostrarinfocultivoind($sesion,$cultivo_id){
        //Incluimos los iconos
        include('vistas/iconos.php');
        $conecta = new conexionDB();
        $conecta -> miCultivo();
        $conexion = $conecta ->conexionmiCultivo;
    
        $consulta = mysqli_query($conexion, "SELECT nombre FROM cultivo WHERE id='$cultivo_id' AND usuario_id='$sesion'");
        if (mysqli_num_rows($consulta)>0)
        {
            $obtenernombre = mysqli_fetch_array($consulta);
            $cultivo = $obtenernombre['nombre'];
        }else{
            $cultivo = ''; 
        }

        return $cultivo;
    }

    function mostrartareas($sesion){
         //Incluimos los iconos
         include('vistas/iconos.php');
        $conecta = new conexionDB();
        $conecta -> miCultivo();
        $conexion = $conecta ->conexionmiCultivo;
    
        $consulta = mysqli_query($conexion, "SELECT id_plan, nombre, nombre_plan, inicio_plan, final_plan, descripcion, descripcion_p, recurso_hum, recurso_econ, recurso_mat, CONCAT('Del ',DATE_FORMAT(inicio_plan, '%d/%m/%Y'),' al ',DATE_FORMAT(final_plan, '%d/%m/%Y'),'.') as periodo 
        FROM plan, cultivo 
        WHERE inicio_plan <= DATE_ADD(NOW(), INTERVAL 4 DAY) 
          AND DATEDIFF(NOW(), inicio_plan) <= 5 
          AND plan.completado = 0 
          AND plan.cultivo_id = cultivo.id 
          AND cultivo.usuario_id='$sesion'");
        if (mysqli_num_rows($consulta)>0)
        {
            $cultivos = "";
            while ($datos = mysqli_fetch_array($consulta)) {
            include('vistas/modulos/card_tarea.php'); 
            }
            return $cultivos;
    
        }else{
            include('vistas/modulos/card_tarea_vacio.php'); 
        }
    }

    function mostrarcultivos($sesion){
        //Incluimos los iconos
        include('vistas/iconos.php');
        $conecta = new conexionDB();
        $conecta -> miCultivo();
        $conexion = $conecta ->conexionmiCultivo;
    
        $consulta = mysqli_query($conexion, "SELECT * FROM cultivo WHERE usuario_id='$sesion'");
        if (mysqli_num_rows($consulta)>0)
        {
            $cultivos = "";
            while ($datos = mysqli_fetch_array($consulta)) {
                $cultivos .= "<option value='".$datos['id']."'>".$datos['nombre']."</option>"; 
            }
            return $cultivos;
    
        }else{
            $cultivos .= "<option value=''>No hay cultivos</option>";   
        }
        return $cultivos;
    }



    function mostrarbitacoras($sesion,$cultivo_id){
        //Incluimos los iconos
        include('vistas/iconos.php');
       $conecta = new conexionDB();
       $conecta -> miCultivo();
       $conexion = $conecta ->conexionmiCultivo;
   
       $consulta = mysqli_query($conexion, "SELECT id_bitacora, plan_id, GROUP_CONCAT('<strong>',DATE_FORMAT(fecha, '%d/%m/%Y'),' a las ',DATE_FORMAT(fecha, '%H:%i'),' en ',lugar, ': </strong> </br> <p>', desarollo SEPARATOR'</p> </br>') as descripciones, GROUP_CONCAT(fecha SEPARATOR '<br>') as fecha, plan.nombre_plan,cultivo.nombre FROM bitacora, plan, cultivo WHERE cultivo.id = '$cultivo_id' AND cultivo.usuario_id='$sesion' AND bitacora.plan_id = plan.id_plan AND plan.cultivo_id = cultivo.id GROUP BY plan_id;");
       if (mysqli_num_rows($consulta)>0)
       {
           $bitacoras = "";
           while ($datos = mysqli_fetch_array($consulta)) {
           include('vistas/modulos/card_bitacora.php'); 
           }
           return $bitacoras;
   
       }else{
           include('vistas/modulos/card_bitacora_vacio.php'); 
       }
   }


   function mostrartareascultivo($cultivo_id){
    //Incluimos los iconos
    include('vistas/iconos.php');
   $conecta = new conexionDB();
   $conecta -> miCultivo();
   $conexion = $conecta ->conexionmiCultivo;

   $consulta = mysqli_query($conexion, "SELECT id_plan, nombre, nombre_plan, inicio_plan, final_plan, descripcion, descripcion_p, recurso_hum, recurso_econ, recurso_mat, CONCAT(DATE_FORMAT(inicio_plan, '%d/%m/%Y'),' al ',DATE_FORMAT(final_plan, '%d/%m/%Y'),'.') as periodo, completado FROM plan, cultivo WHERE  plan.cultivo_id = cultivo.id AND cultivo.id='$cultivo_id'");
   if (mysqli_num_rows($consulta)>0)
   {
       $tareas = "";
       
       echo '<thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Periodo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>';
                
       while ($datos = mysqli_fetch_array($consulta)) {
        if($datos['completado'] == 0){
            $estado = 'Asignado';
        }else{
            $estado = 'Completado';
        }
         $tareas .= '
         <tr>
           <th scope="row">'.$datos['nombre_plan'].'</th>
           <td>'.$datos['periodo'].'</td>
           <td>'.$estado.'</td>
           <td><form action="cultivo" class="btn btn-sm p-0" method="post"><input type="hidden" name="plan" value="'.$datos['id_plan'].'"><button type="submit" name="eliminar_plan" class="btn btn-sm btn-outline-danger">Eliminar</button></form></td>
         </tr>';
       }
       
       echo '</tbody>';
       return $tareas;

   }else{
       echo 'No hay tareas';
   }
   
}
?>