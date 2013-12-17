<?php
	session_start("agead");
	if($page != 'login') {
		if(!isset($_SESSION["agentCat"])) {
			ob_start();
			while (ob_get_status()) {
				ob_end_clean();
			}
			header('Location: http://localhost:81/qAgente/index.php', false);
			die();
		}
	} else {
		if(isset($_SESSION['agentCat'])) {
			$_SESSION = array();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title></title>

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" type="text/css" href="css/app.css">

</head>
<body>

