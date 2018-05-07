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
		$query = "SELECT * FROM empresas INNER JOIN sector_empresarial ON empresas.sector = sector_empresarial.id_sector WHERE nit='".$nit_empresa."';";
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

	function sectorList($sector = null){

	}

	function regitrarSector($nombre_sector){
		if (!is_null($resultado)) {
			echo "Sector Registrado";
		}else{
			echo "Hubo un error";
		}
	}
}
