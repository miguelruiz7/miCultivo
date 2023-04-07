<?php
include('config/conexion.php');
include('controlador/sesion.php');
sesion();
include('controlador/rutas.php');
//Incluimos los iconos
include('vistas/iconos.php');
//Incluimos los controladores
include('controlador/cultivos.php');



$conecta = new conexionDB();
$conecta -> miCultivo();
$conexion = $conecta ->conexionmiCultivo;

 $errores = '';

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
            header('Location: cultivo');
    
        }else{
            //Añadir una excepción
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


//ELIMINAR PLAN O TAREA
if(isset($_POST['eliminar_plan'])){
  if($_SERVER['REQUEST_METHOD']=='POST'){ 
     // Se almacenan los valores obtenidos por el formulario en las siguientes variables.
  $id=$_POST['plan'];
  //Verifica que no este vacio el campo
  if($id == ''){
      $errores .="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      Rellene los datos correctamente.
    </div>";
  }else{
       //Si el campo no está vacio se procede a ejecutar las sentencias SQL
    //Se realiza la actualización en la tabla plan a través del mysqli_query
    $sql="DELETE FROM plan WHERE id_plan='$id'";
    if (mysqli_query($conexion,$sql))
    {
      $errores .="<div class='alert alert-success alert-dismissible fade show' role='alert'>
      Se elimino el plan.
    </div>"; 

  }else{
      $errores .="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      Falló.
    </div>";
  }
}
}
}

//Vistas
include('vistas/cultivo.php');

    ?>
    
    
    