<?php
  require_once 'conexion.php';
  
	if(isset($_POST['pid']) ){
		$id = $_POST['pid'];

	    $sentencia_sql = "CALL anularFacturas"."($id)";

	    // echo $sentencia_sql;

	    $stmt = $conn->prepare($sentencia_sql);

	    $stmt->execute();

	    $filas = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

	    echo json_encode($filas);
	}



?>