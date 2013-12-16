<?php

	include 'conn.php';

	$reg = array();

	$agentCat = $_POST["agentCat"];
	$agentName = $_POST["agentName"];
	$agentEmail = $_POST["agentEmail"];
	$agentPwd  = $_POST["agentPwd"];

	$agentPwd  = md5($agentPwd);

	$sql = "INSERT INTO ageadusuarios " ;
	$sql .= "(email, pwd, nome, categoria) ";
	$sql .= "VALUES ('$agentEmail', '$agentPwd', '$agentName', '$agentCat') ";

	$rs = mysql_query($sql, $conn);
	if($rs === FALSE) {
		$reg = array("status"=>"failed");
		die(mysql_error());
	} else {
		$reg = array("status"=>"success");
	}

	echo json_encode($reg);

?>