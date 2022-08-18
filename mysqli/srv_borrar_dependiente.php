<?php
include "Database.inc";
include "../_utils.php";
header('Content-Type: application/json');
$body = json_decode(file_get_contents("php://input"), true);
$id = $body['id'];
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
	}		$sql= "UPDATE dependiente set estatus=0 WHERE id=?";
	$stmt = $conn->prepare($sql);	
	$stmt->bind_param("i", $id);
	$stmt->execute();	
	if ($stmt->affected_rows == 1) {
	    //echo "New record created successfully";
	    $arr = array(
			"result" => true,
			"codigo" => 1,
			"mensaje"=>tr("Se borró el registro"),
			"folio" =>  mysqli_insert_id($conn)
		);
		echo json_encode($arr);
	} else {
	    $arr = array(
	        "result" => false,
	        "codigo" => 0,
	        "mensaje" => "Ocurrió un error al borrar el registro"
	    );
	    echo json_encode($arr);
	}
}
mysqli_close($conn);
?>