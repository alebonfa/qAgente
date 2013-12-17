<?php

	session_start("agead");

	include 'conn.php';

	$reg = array();

	$agent = $_SESSION["agentID"];
	$data = $_POST["dataInscricao"];
	$curso = $_POST["curso"];
	$nome = $_POST["alunoNome"];
	$email = $_POST["alunoEmail"];
	$fone = $_POST["alunoFone"];
	$cpf = $_POST["alunoCPF"];
	$endereco = $_POST["alunoEndereco"];
	$cidade = $_POST["alunoCidade"];
	$estado = $_POST["alunoEstado"];
	$valor = $_POST["inscricao"];
	$forma = $_POST["forma"];

	$sql = "INSERT INTO ageadmatriculas " ;
	$sql .= "(user_id, curso_id, data, nome, email, fone, cpf, endereco, cidade, estado, valor, forma) ";
	$sql .= "VALUES ($agent, $curso, '$data', '$nome', '$email', '$fone', '$cpf', '$endereco', '$cidade', '$estado', $valor, '$forma') ";

	$rs = mysql_query($sql, $conn);
	if($rs === FALSE) {
		$reg = array("failed");
		die(mysql_error());
	} else {
		$reg = array("success");
	}

	echo json_encode($reg);

?>