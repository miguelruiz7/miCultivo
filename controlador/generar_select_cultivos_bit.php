 <?php
 
  include('../config/conexion.php');
  
  include('sesion.php');
  
  $sesion = sesion();
 
 $conecta = new conexionDB();
        $conecta -> miCultivo();
        $conexion = $conecta ->conexionmiCultivo;
    
        $consulta = mysqli_query($conexion, "SELECT * FROM cultivo");
        if (mysqli_num_rows($consulta)>0)
        {
             echo "<option value=''>Selecciona:</option>"; 
            while ($datos = mysqli_fetch_array($consulta)) {
                echo "<option value='".$datos['id']."'>".$datos['nombre']."</option>"; 
            }
    
        }else{
            
            echo "<option value=''>No hay cultivos registrados</option>"; 
        }
        
        ?>