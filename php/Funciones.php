<?php 
include 'conexion_db.php';
/**
* 
*/
$BD = new Conexion();

class Funciones
{

function ejecutarQuery($query)
	{
		$C = new Conexion();
		$link = $C->conectar();
		$resultado = mysqli_query($link,$query);

		return $resultado;
	}

function sectorOptions(){	{
		$query = "SELECT * FROM sector_empresarial";
		$resultado = $this->ejecutarQuery($query);
		if (mysqli_num_rows($resultado)>0) {
			while ($fila= mysqli_fetch_assoc($resultado)) { ?>
			<option value="<?php echo $fila['id_sector'] ?>"><?php echo utf8_encode($fila['nombre_sector']);?></option>
			<?php 
		}
	}
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
}}

}



?>