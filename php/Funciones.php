<?php 
include_once 'conexion_db.php';
include_once 'obj/empresa.php';
/**
* 
*/

class Funciones
{

	function tiempo($date) {
	   date_default_timezone_set('America/Bogota');
	   $timestamp = strtotime($date);	
	   
	   $strTime = array("segundo", "minuto", "hora", "dia", "mes", "año");
	   $length = array("60","60","24","30","12","10");

	   $currentTime = time();
	   if($currentTime >= $timestamp) {
			$diff     = time()- $timestamp;
			for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
			$diff = $diff / $length[$i];
			}

			$diff = round($diff);
			return "Hace ".$diff . " " . $strTime[$i] . "(s) ";
	   }
	}
	

	function ejecutarQuery($query){
		$BD = new Conexion();
		$link = $BD->conectar();
		$resultado = mysqli_query($link,$query);
		return $resultado;
	}

	function contar($tabla){
		$resultado = $this->ejecutarQuery("SELECT COUNT(*) as ".$tabla." FROM ".$tabla);
        $empresas = mysqli_fetch_assoc($resultado);
        echo $empresas[$tabla];
	}

	function datosEmpresa($nit_empresa){
		$empresa = new Empresa();
		$query = "SELECT empresas.nombre, correo, hash_contrasena, nit, direccion, telefono, descripcion,sector_empresarial.nombre as nombre_sector FROM empresas INNER JOIN sector_empresarial ON empresas.id_sector = sector_empresarial.id WHERE nit='".$nit_empresa."';";
		$resultado = $this->ejecutarQuery($query);

		while ($fila = mysqli_fetch_assoc($resultado)) {
			$empresa->setLogo_empresa("../store/empresas/".$fila['nit']."/img/"."300_".$fila['nit'].".png");
			$empresa->setFavico_empresa("../store/empresas/".$fila['nit']."/img/"."128_".$fila['nit'].".png");
			$empresa->setNombre($fila['nombre']);
			$empresa->setSector($fila['nombre_sector']);
			$empresa->setCorreo($fila['correo']);
			$empresa->setNit($fila['nit']);
			$empresa->setTelefono($fila['telefono']);
			$empresa->setDireccion($fila['direccion']);
			$empresa->setDescripcion($fila['descripcion']);
		}
		return $empresa;
	}
}
