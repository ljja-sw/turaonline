<?php 
include 'conexion_db.php';
include 'obj/empresa.php';
/**
* 
*/

class Funciones
{

function ejecutarQuery($query){
		$BD = new Conexion();
		$link = $BD->conectar();
		$resultado = mysqli_query($link,$query);
		return $resultado;
	}

function datosEmpresa($nit_empresa){
	$empresa = new Empresa();
	$query = "SELECT * FROM empresas WHERE nit='".$nit_empresa."';";
	$resultado = $this->ejecutarQuery($query);

	while ($fila = mysqli_fetch_assoc($resultado)) {
		$empresa->setLogo_empresa("../store/empresas/".$fila['nit']."/img/"."300_".$fila['id_empresa'].".png");
	    $empresa->setFavico_empresa("../store/empresas/".$fila['nit']."/img/"."128_".$fila['id_empresa'].".png");
	    $empresa->setNombre($fila['nombre']);
	    $empresa->setSector($this->getNombreSector($fila['sector']));
	    $empresa->setCorreo($fila['correo']);
	    $empresa->setNit($fila['nit']);
	    $empresa->setTelefono($fila['telefono']);
	    $empresa->setDireccion($fila['direccion']);
	    $empresa->setDescripcion($fila['descripcion']);
	}
	return $empresa;
}

function sectorList(){

}

function regitrarSector($nombre_sector){
	$query = "INSERT INTO sector_empresarial VALUES(".$nombre_sector.");";
	$resultado = $this->ejecutarQuery($query);
	if (!is_null($resultado)) {
		echo "Sector Registrado";
	}else{
		echo "Hubo un error";
		}
   	}

function getNombreSector($id_sector){
	$query = "SELECT nombre_sector FROM sector_empresarial WHERE id_sector=".$id_sector.";";
	$resultado = $this->ejecutarQuery($query);
	$fila = mysqli_fetch_assoc($resultado);
	return  $fila['nombre_sector'];
   	}
}
