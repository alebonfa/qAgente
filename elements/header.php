<?php
	session_start("agead");
	if($page != 'login') {
		if(!isset($_SESSION["agentCat"])) {
			echo '<script>window.location.href="index.php";</script>';
			echo '<script>window.location.reload(true);</script>';
			exit();
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

