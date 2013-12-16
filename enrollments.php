<?php
	$page = 'matricula';
?>

<?php require 'elements/header.php' ?>

	<div data-role="page" id="pageone">

		<div data-role="header" data-position="fixed">
			<h1>Matrículas</h1>
		</div>
		<div data-role="content">
			<div id='logo'>
				<img src="images/logo-ead.png">
			</div>
			<div>
				<form action="php/register.php" method="post" autocomplete="off">
					<select name="agentCat">
						<option value="Agente">Agente</option>
						<option value="SuperAgente">Super Agente</option>
					</select>
					<input type="text" name="agentName" id="agentName" value="" placeholder="Nome"/>
					<input type="text" name="agentEmail" id="agentEmail" value="" placeholder="email"/>
					<input type="password" name="agentPwd" id="agentPwd" value="" placeholder="Senha"/>
					<input type="submit" value="Cadastrar"/>
				</form>
			</div>
		</div>


<?php require 'elements/footer.php' ?>