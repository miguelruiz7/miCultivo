<?php
//Se incluye la conexión
include('controlador/conexion.php');

//Incluimos dependencias
include('modelo/bases.php');

//Declaramos nuestros errores en vacío.
$errores= '';

//INSERTAR
if(isset($_POST['agregar'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $nombre=$_POST['txtnombre'];
    $tipo=$_POST['txttipo'];
    $ubicacion=$_POST['txtubicacion'];
    $inicio=$_POST['txtfi'];
    $final=$_POST['txtff'];
    $descripcion=$_POST['txtdescripcion'];
    $area=$_POST['txtarea'];
    $rendimientoi=$_POST['txtreni'];

    if($nombre == '' && $tipo == '' && $ubicacion == '' && $inicio == '' && $final == '' && $descripcion == '' && $area == '' && $rendimientoi == ''){
        $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Rellene todos los datos correctamente.

      </div>";
    }

    if($inicio>$final){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Introduce una fecha que no sea mayor a la final.
    </div>";
    }

    if($errores == ''){
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


//ACTUALIZAR
if(isset($_POST['actualizar'])){
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

    if($id == '' || $nombre == '' || $tipo == '' || $ubicacion == '' || $inicio == '' || $final == '' || $descripcion == '' || $rendimientoi == ''){
        $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Ingrese todos los datos correctamente.

      </div>";
    }else{
    
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
}

//ELIMINAR
if(isset($_POST['eliminar'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $id=$_POST['id'];
    if($id == ''){
        $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Rellene los datos correctamente.

      </div>";
    }else{


      $sql = "DELETE FROM cultivo_bitacora WHERE cultivo_id='$id';"; 
      if(mysqli_query($conexion,$sql)){
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
      }else{

      }
}
  }
}



//INSERTAR PLAN
if(isset($_POST['agregarplan'])){
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $id_cultivo = $_POST['idcultivo'];
  $nombre = ucfirst($_POST['txtnombre']);
  $inicio=$_POST['txtini'];
  $final=$_POST['txtfin'];
  $descripcion=$_POST['txtdescripcion'];
  $humanos=$_POST['txthum'];
  $presupuesto=$_POST['txtpto'];
  $materiales=$_POST['txtmat'];


  if($nombre == '' || $inicio == '' || $final == '' || $inicio == '' || $final == '' || $descripcion == '' || $humanos == '' || $presupuesto == '' || $materiales == ''){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Rellene todos los datos correctamente.
    </div>";
  }

   //Valida si el usuario esta en la base de datos
   $usr=mysqli_query($conexion,"SELECT * FROM plan WHERE nombre_plan = '$nombre' AND cultivo_id = '$id_cultivo'");
   if (mysqli_num_rows($usr)>0)
   {
    $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    $nombre, ya se encuentra activo en el plan.
  </div>";
   }
  
  
  
  if($errores == ''){
  
  $sql="INSERT INTO plan (id_plan,nombre_plan,descripcion_p,recurso_hum,recurso_econ,recurso_mat,inicio_plan,final_plan,completado,cultivo_id) VALUES (NULL,'$nombre','$descripcion','$humanos','$presupuesto','$materiales','$inicio','$final',0,'$id_cultivo')";
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



//COMPLETAR PLAN
if(isset($_POST['completado'])){
  if($_SERVER['REQUEST_METHOD']=='POST'){ 
  $id=$_POST['id_plan'];
  if($id == ''){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Rellene los datos correctamente.
    </div>";
  }else{
    $sql="UPDATE plan SET completado=1 WHERE id_plan='$id'";
    if (mysqli_query($conexion,$sql))
    {
      $errores .="<div class='alert alert-success alert-dismissible fade show' role='alert'>
      Se marca cómo acompletada la tarea.
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

//INSERTAR BITACORA
if(isset($_POST['agregarbit'])){
  error_reporting(0);
  if($_SERVER['REQUEST_METHOD']=='POST'){ 
  $plan=$_POST['txtplan'];
  $lugar=$_POST['txtlugar'];
  //$fecha=$_POST['txtfecha'];
  $descripcion=ucfirst($_POST['txtdescripcion']);
  $marcacompleta = $_POST['completar'];

  if($plan == '' || $lugar == '' || $descripcion == ''){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Rellene todos los datos correctamente.
    </div>";
  }else{
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
      //Añadir una excepción
      $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      Falló.
    </div>";
  }
}
}
}

require('vistas/encabezado.php');
require('vistas/index.php');
require('vistas/modulos/pies/pie.php');
?>