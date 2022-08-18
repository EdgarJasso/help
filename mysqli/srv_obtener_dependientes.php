<?php

/*
Códigos de error
0: Ocurrió un error en el sistema
1: Éxito
2: No encontró resultados para el criterio de búsqueda
3: El correo ya se encuentra registrado
*/

include "Database.inc";
include "../_utils.php";
header('Content-Type: application/json');
$body = json_decode(file_get_contents("php://input"), true);

$id = $body['id'];
$dependientes=[];
if($id == ''){
	$arr = array(
		"result" => false,
		"codigo" => 0,
		"mensaje" => "Ocurrió un error en el sistema"
	);
	echo json_encode($arr);
}else{
	$dbdata = new Database();
	$conn = $dbdata->connect();
	if (!$conn) {
		die( mysqli_connect_error() );
	}

	$sql = "SELECT d.id, d.correo, d.nombre, d.apellidos, d.fecha_nacimiento, d.tipo_identificacion, d.identificacion, d.genero, d.fecha_creacion, d.fecha_update, p.descripcion, p.id as id_parentesco FROM dependiente d, parentesco p WHERE p.id = d.id_parentesco and d.id_usuario=? and d.estatus=1"; 
	$stmt = $conn->prepare($sql); 
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$result = $stmt->get_result(); // get the mysqli result
	//$arr = array('dependientes' => array());   

	while ($usuario = $result->fetch_assoc()) {
		$usuario["fecha_nacimiento"] = date("d-m-Y", strtotime($usuario["fecha_nacimiento"]));
		$usuario["descripcion"] = tr($usuario["descripcion"]);
		$dependientes[] = $usuario;   
	}

	$arr = $dependientes;	
	if ($dependientes == null){
		$arr = array(
			"result" => true,
			"codigo" => 2,
			"mensaje" => "No existen resultados para el criterio de búsqueda"
		);
	}

	echo json_encode($arr);

	mysqli_close($conn);
}


?>
