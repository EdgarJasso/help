<?php

/*
Códigos de error
0: Ocurrió un error en el sistema
1: Éxito
2: No encontró resultados para el criterio de búsqueda
3: El correo ya se encuentra registrado
4: No existe la cuenta principal
5: El dependiente no existe en la base de datos
*/

include "Database.inc";
include "../_utils.php";
//$data = $_GET['json'];
header('Content-Type: application/json');
$body = json_decode(file_get_contents("php://input"), true);

$id = $body['id'];
$correo_dependiente = $body['correo_dependiente'];
$nombre = $body['nombre'];
$apellidos = $body['apellidos'];
$fecha_nacimiento = $body['fecha_nacimiento'];
$tipo_identificacion = $body['tipo_identificacion'];
$identificacion = $body['identificacion'];
$genero = $body['genero'];
$id_parentesco = $body['id_parentesco'];
$estatus = $body['estatus'];


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

	//primero se valida si existe el correo
	$sql = "SELECT * FROM dependiente where id=".$id;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		$fecha_nacimiento = date("Y-m-d", strtotime($fecha_nacimiento));
		$sql = "UPDATE dependiente SET id_parentesco=?,correo=?, nombre=?,apellidos=?,fecha_nacimiento=?,tipo_identificacion=?,identificacion=?,genero=?,estatus=?, fecha_update=CURRENT_TIMESTAMP WHERE id=?";

		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssssssssi", $id_parentesco,$correo_dependiente, $nombre, $apellidos, $fecha_nacimiento, $tipo_identificacion, $identificacion, $genero, $estatus, $id);

		$stmt->execute();
		//printf("%d row inserted.\n", $stmt->affected_rows);

		if ($stmt->affected_rows == 1) {
		    //echo "New record created successfully";

		    $arr = array(
				"result" => true,
				"codigo" => 1,
				"mensaje"=>tr("Se actualizó el registro"),
				"folio" =>  mysqli_insert_id($conn)
			);

			echo json_encode($arr);

		} else {
		    $arr = array(
		        "result" => false,
		        "codigo" => 0,
		        "mensaje" => "Ocurrió un error en el sistema"
		    );
		    echo json_encode($arr);
		}
	}else{
		$arr = array(
			"result" => true,
			"codigo" => 5,
			"usuario" => "El dependiente no existe en la base de datos"
		);
		echo json_encode($arr);
	}
}
mysqli_close($conn);
?>
