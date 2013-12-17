<?php
	$page = 'login';
?>

<?php require_once 'elements/header.php' ?>

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
					<input type="email" name="agentEmail" id="agentEmail" value="" placeholder="email" required/>
					<input type="password" name="agentPwd" id="agentPwd" value="" placeholder="Senha" required/>
					<div style="display:none">
						<input type="submit" id="sbmLogar" value="Entrar"/>
					</div>
				</form>
				<input type="button" id="btnLogar" value="Entrar">
			</div>
			<div id="msg"></div>
		</div>

<?php require_once 'elements/footer.php' ?>