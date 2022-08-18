<?php

/*
Códigos de error
0: Ocurrió un error en el sistema
1: Éxito
2: No encontró resultados para el criterio de búsqueda
3: El correo ya se encuentra registrado
4: No existe la cuenta principal
*/

include "Database.inc";
include "../_utils.php";
header('Content-Type: application/json');
$body = json_decode(file_get_contents("php://input"), true);

$correo = $body['correo'];
$correo_dependiente = $body['correo_dependiente'];
$nombre = $body['nombre'];
$apellidos = $body['apellidos'];
$fecha_nacimiento = $body['fecha_nacimiento'];
$tipo_identificacion = $body['tipo_identificacion'];
$identificacion = $body['identificacion'];
$genero = $body['genero'];
$id_parentesco = $body['id_parentesco'];
$estatus = $body['estatus'];


$dbdata = new Database();
$conn = $dbdata->connect();
if (!$conn) {
	die( mysqli_connect_error() );
}

//primero se valida si existe el correo
$sql = "SELECT * FROM usuario where correo='".$correo."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$resultado = $result->fetch_assoc();
	$fecha_nacimiento = date("Y-m-d", strtotime($fecha_nacimiento));
	$sql = "INSERT INTO dependiente(correo,nombre,apellidos,fecha_nacimiento,tipo_identificacion,identificacion,genero,id_usuario,id_parentesco,estatus) VALUES (?,?,?,?,?,?,?,?,?,1)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sssssssii", $correo_dependiente,  $nombre, $apellidos, $fecha_nacimiento, $tipo_identificacion, $identificacion, $genero, $resultado["id"], $id_parentesco);

	$stmt->execute();

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
		"codigo" => 4,
		"usuario" => "No existe la cuenta principal"
	);
	echo json_encode($arr);
}
mysqli_close($conn);
?>
