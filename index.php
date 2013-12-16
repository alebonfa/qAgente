<?php
	session_start("agead");
	$page = 'login';
?>

<?php require 'elements/header.php' ?>

	<div data-role="page" id="pageone">

		<div data-role="header" data-position="fixed">
			<h1>Login</h1>
		</div>
		<div data-role="content">
			<div id='logo'>
				<img src="images/logo-ead.png">
			</div>
			<div>
				<form id="frmLogin" action="php/authentication.php" method="post" autocomplete="off">
					<input type="text" name="agentEmail" id="agentEmail" value="" placeholder="email"/>
					<input type="password" name="agentPwd" id="agentPwd" value="" placeholder="Senha"/>
					<div style="display:none">
						<input type="submit" value="Entrar"/>
					</div>
				</form>
				<input type="button" id="btnLogar" value="Entrar">
			</div>
			<div id="msg"></div>
		</div>

<?php require 'elements/footer.php' ?>