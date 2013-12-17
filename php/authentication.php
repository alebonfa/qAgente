<?php
	session_start("agead");
	
	require 'conn.php';

	$auth = array();

	$agentEmail = $_POST["agentEmail"];
	$agentPwd  = $_POST["agentPwd"];

	$agentPwd  = md5($agentPwd);

	$sql = "SELECT * FROM ageadusuarios " ;
	$sql .= "WHERE email = '$agentEmail' ";
	$sql .= "and pwd = '$agentPwd' ";

	$search = mysql_query($sql, $conn);
	if(@mysql_num_rows($search)==0) {
        unset($_SESSION['agentID']);
        unset($_SESSION['agentName']);
        unset($_SESSION['agentCat']);
		$auth = array("failed","Deu errado!");
	} else {
		while($row = mysql_fetch_array($search)) {
	        $_SESSION['agentID'] = $row['id'];
	        $_SESSION['agentName'] = $row['nome'];
	        $_SESSION['agentCat'] = $row['categoria'];
		}
		$auth = array("success","Deu certo!");
	}

	echo json_encode($auth);

?>