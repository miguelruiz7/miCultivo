<?php
//Se incluye la conexión
include('controlador/conexion.php');
include('controlador/admin_session.php');

/*
// Extracción del archivo: controlador/conexion.php

//Datos principales de la conexión
  $host = "localhost";    
	$basededatos = "tubasededatos"; 
	$usuariodb = "tuusuario";    
	$clavedb = "tuclave"; 

// Se crea el objecto que creara la conexion a la base de datos
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	$conexionPDO = new PDO('mysql:host='.$host.';dbname='.$basededatos.'',''.$usuariodb.'',''.$clavedb.'');
	$pagina=basename($_SERVER['PHP_SELF'],'.php');

*/

//Incluimos dependencias
include('modelo/bases.php');
//Declaramos nuestros errores en vacío.
$errores= '';

//INSERTAR CULTIVO
if(isset($_POST['agregar'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
      // Se almacenan los valores obtenidos por el formulario en las siguientes variables.
    $nombre=$_POST['txtnombre'];
    $tipo=$_POST['txttipo'];
    $ubicacion=$_POST['txtubicacion'];
    $inicio=$_POST['txtfi'];
    $final=$_POST['txtff'];
    $descripcion=$_POST['txtdescripcion'];
    $area=$_POST['txtarea'];
    $rendimientoi=$_POST['txtreni'];

    //Valida que las variables no se encuentren vacias
    if($nombre == '' && $tipo == '' && $ubicacion == '' && $inicio == '' && $final == '' && $descripcion == '' && $area == '' && $rendimientoi == ''){
        $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Rellene todos los datos correctamente.

      </div>";
    }

    //En estas dos condiciones valida si la fecha de inicio es mayor a la final ó si la fecha de inicio es igual a la finalización
    if($inicio>$final){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Introduce una fecha que no sea mayor a la final.
    </div>";
    }

    if($inicio==$final){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      El cultivo no tiene un ciclo de un día. Por lo cual debe especificar una fecha válida
    </div>";
    }

    //Si no hay ningún error se procede a ejecutar las sentencias SQL
    if($errores == ''){
      //Cuando la condicion se cumpla, se realiza la inserción de los datos en la tabla cultivo a través del mysqli_query
    $sql="INSERT INTO cultivo (nombre,tipo_id,ubicacion,inicio,final,descripcion,area,rendimiento) VALUES ('$nombre','$tipo','$ubicacion','$inicio','$final','$descripcion','$area','$rendimientoi')";
    if (mysqli_query($conexion,$sql))
    {
       $errores .="<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        Se agrego a la base de datos.

      </div>";
    }else{
        //Añadir una excepción
        $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        Falló.

      </div>";
    }
  }
  }
}
//ACTUALIZAR CULTIVO
if(isset($_POST['actualizar'])){
    // Se almacenan los valores obtenidos por el formulario en las siguientes variables.
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $id=$_POST['id'];
    $nombre=$_POST['txtnombre'];
    $tipo=$_POST['txttipo'];
    $ubicacion=$_POST['txtubicacion'];
    $inicio=$_POST['txtfi'];
    $final=$_POST['txtff'];
    $descripcion=$_POST['txtdescripcion'];
    $area=$_POST['txtarea'];
    $rendimientoi=$_POST['txtreni'];

    //Verifica que no haya campos vacios
    if($id == '' || $nombre == '' || $tipo == '' || $ubicacion == '' || $inicio == '' || $final == '' || $descripcion == '' || $rendimientoi == ''){
        $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Ingrese todos los datos correctamente.
      </div>";
    }

     //En estas dos condiciones valida si la fecha de inicio es mayor a la final ó si la fecha de inicio es igual a la finalización
      if($inicio>$final){
        $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Introduce una fecha que no sea mayor a la final.
      </div>";
      }

      if(new DateTime($inicio)==new DateTime($final)){
        $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        El cultivo no tiene un ciclo de un día. Por lo cual debe especificar una fecha válida
      </div>";
      }
    }
   
    //Si no hay ningún error se procede a ejecutar las sentencias SQL
    if($errores == ''){
    //Se realiza la actualización de los datos en la tabla cultivo a través del mysqli_query
    $sql="UPDATE cultivo SET nombre='$nombre',tipo_id='$tipo',ubicacion='$ubicacion',inicio='$inicio',final='$final',descripcion='$descripcion',area='$area',rendimiento='$rendimientoi' WHERE id = '$id'";
    if (mysqli_query($conexion,$sql))
    {
       $errores .="<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        Se realizó la modificación correctamente.

      </div>"; 

    }else{
        //Añadir una excepción
        $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        Falló.

      </div>";
    }
}
  }
//ELIMINAR CULTIVO
if(isset($_POST['eliminar'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
      // Se almacenan los valores obtenidos por el formulario en las siguientes variables.
    $id=$_POST['id'];
    if($id == ''){
        $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Rellene los datos correctamente.

      </div>";
    }else{
        //Se realiza la eliminación de los datos en la tabla cultivo, plan a través del mysqli_multi_query
        
        $sqldel="DELETE FROM plan WHERE cultivo_id='$id';";
        $sqldel.="DELETE FROM cultivo WHERE id='$id'";
          if (mysqli_multi_query($conexion,$sqldel))
          {
            $errores .="<div class='alert alert-success alert-dismissible fade show' role='alert'>
            Se eliminó satisfactoriamente.
          </div>";
            header('Location: index');
    
        }else{
            //Añadir una excepción
            $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Falló.
          </div>";
        }
}
  }
}
//INSERTAR PLAN o TAREA
if(isset($_POST['agregarplan'])){
  if($_SERVER['REQUEST_METHOD']=='POST'){
    // Se almacenan los valores obtenidos por el formulario en las siguientes variables.
  $id_cultivo = $_POST['idcultivo'];
  $nombre = ucfirst($_POST['txtnombre']);
  $inicio=$_POST['txtini'];
  $final=$_POST['txtfin'];
  $descripcion=$_POST['txtdescripcion'];
  $humanos=$_POST['txthum'];
  $presupuesto=$_POST['txtpto'];
  $materiales=$_POST['txtmat'];

  
 //Verifica que no haya campos vacios
  if($nombre == '' || $inicio == '' || $final == '' || $inicio == '' || $final == '' || $descripcion == '' || $humanos == '' || $presupuesto == '' || $materiales == ''){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Rellene todos los datos correctamente.
    </div>";
  }

  //Se realiza la consulta en la tabla plan  a través del mysqli_query
   $usr=mysqli_query($conexion,"SELECT * FROM plan WHERE nombre_plan = '$nombre' AND cultivo_id = '$id_cultivo'");
   if (mysqli_num_rows($usr)>0)
   {
    $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    $nombre, ya se encuentra activo en el plan.
  </div>";
   }

     //Se realiza la consulta en la tabla cultivo a través del mysqli_query
     $fechas=mysqli_query($conexion,"SELECT * FROM cultivo WHERE id= '$id_cultivo'");
     if (mysqli_num_rows($fechas)>0)
     {
      //Obtendra los periodos del cultivo a traves e mysqli_fetch_array
      $periodos = mysqli_fetch_array($fechas);
      //Convierte las fechas en objectos
      $forminicio = new DateTime($inicio);
      $formfinal = new DateTime($final);
      $finicio = new DateTime($periodos['inicio']);
      $ffinal = new DateTime($periodos['final']);
      
      // Verificar que la fecha de inicio de la tarea esté dentro del semestre
            if ($forminicio >= $finicio && $forminicio <= $ffinal) {
              // Verificar que la fecha de fin de la tarea esté dentro del semestre
              if ($formfinal >= $finicio && $formfinal <= $ffinal) {
                // La tarea está dentro del período semestral, hacer lo que sea necesario
                // ...
              } else {
                $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                La fecha de finalización de la actividad está fuera del periodo del cultivo.
                </div>";
              }
              } else {
                $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  La fecha de inicio de la actividad está fuera del periodo del cultivo.
                </div>";
              }
     }
  
  
     //Si no hay ningún error se procede a ejecutar las sentencias SQL
  if($errores == ''){
  
    //Se realiza la inserción en la tabla plan a través del mysqli_query
  $sql="INSERT INTO plan (id_plan,nombre_plan,descripcion_p,recurso_hum,recurso_econ,recurso_mat,inicio_plan,final_plan,completado,cultivo_id) VALUES (NULL,'$nombre','$descripcion','$humanos','$presupuesto','$materiales','$inicio','$final',0,'$id_cultivo')";
  if (mysqli_query($conexion,$sql))
  {
     $errores .="<div class='alert alert-primary alert-dismissible fade show' role='alert'>
      Se agrego a la base de datos.
    </div>";
  }else{
      $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      Falló.
    </div>";
  }
}
}
}



//COMPLETAR PLAN O TAREA
if(isset($_POST['completado'])){
  if($_SERVER['REQUEST_METHOD']=='POST'){ 
     // Se almacenan los valores obtenidos por el formulario en las siguientes variables.
  $id=$_POST['id_plan'];
  //Verifica que no este vacio el campo
  if($id == ''){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Rellene los datos correctamente.
    </div>";
  }else{
       //Si el campo no está vacio se procede a ejecutar las sentencias SQL
    //Se realiza la actualización en la tabla plan a través del mysqli_query
    $sql="UPDATE plan SET completado=1 WHERE id_plan='$id'";
    if (mysqli_query($conexion,$sql))
    {
      $errores .="<div class='alert alert-success alert-dismissible fade show' role='alert'>
      Se marca cómo acompletada la tarea.
    </div>"; 

  }else{
      $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      Falló.
    </div>";
  }
}
}
}

//INSERTAR BITACORA
if(isset($_POST['agregarbit'])){
  error_reporting(0);
  if($_SERVER['REQUEST_METHOD']=='POST'){ 
     // Se almacenan los valores obtenidos por el formulario en las siguientes variables.
  $plan=$_POST['txtplan'];
  $lugar=$_POST['txtlugar'];
  $descripcion=ucfirst($_POST['txtdescripcion']);
  $marcacompleta = $_POST['completar'];
 //Verifica que no esten los campos vacios
  if($plan == '' || $lugar == '' || $descripcion == ''){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Rellene todos los datos correctamente.
    </div>";
  }else{
       //Si no hay ningún error se procede a ejecutar las sentencias SQL
    //Se realiza la inserción en la tabla bitácora a través del mysqli_query
  $sql="INSERT INTO bitacora (id_bitacora,plan_id,fecha,lugar,desarollo) VALUES (NULL,'$plan',now(),'$lugar','$descripcion')";
  if (mysqli_query($conexion,$sql))
  {
     $errores .="<div class='alert alert-primary alert-dismissible fade show' role='alert'>
      Se agrego una bitacora a la base de datos.
    </div>";
    if(isset($marcacompleta)){
          $com = "UPDATE plan SET completado = 1 WHERE id_plan = '$plan'";
          if (mysqli_query($conexion, $com)) {
            $errores .="<div class='alert alert-primary alert-dismissible fade show' role='alert'>
            Se marco como completada.
          </div>";
          }
    }
  }else{
      $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      Falló.
    </div>";
  }
}
}
}
//Incluimos nuestras vistas
require('vistas/encabezado.php');
require('vistas/index.php');
require('vistas/modulos/pies/pie.php');
?>