<?php

	include 'conn.php';

	$reg = array();

	$nomeCurso = $_POST["cursoNome"];

	$sql = "INSERT INTO ageadcursos " ;
	$sql .= "(nome) ";
	$sql .= "VALUES ('$nomeCurso') ";

	$rs = mysql_query($sql, $conn);
	if($rs === FALSE) {
		$reg = array("failed");
		die(mysql_error());
	} else {
		$reg = array("success");
	}

	echo json_encode($reg);

?>