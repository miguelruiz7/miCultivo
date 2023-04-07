<?php 

//Creamos nuestra clase conexionDB
class conexionDB {
    //Convertimos nuestra conexionDB en variable pública
    public $conexionmiCultivo;
    public function miCultivo(){

		//Datos principales de la conexión
			$host = "localhost";    
				$basededatos = "micultivo"; 
            	$usuariodb = "root";    
	            $clavedb = ""; 


			$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
			$conexionPDO = new PDO('mysql:host='.$host.';dbname='.$basededatos.'',''.$usuariodb.'',''.$clavedb.'');
			
      //Asignamos la conexion a conexionmiCultivo
      $this-> conexionmiCultivo = $conexion;
    }
  }
?>
