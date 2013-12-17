<?php
	$page = 'agents';

	require 'php/conn.php';

	$sql = "SELECT * FROM ageadusuarios AS u " ;
	$sql .= "ORDER BY u.nome ";
	$rsAgentes = mysql_query($sql, $conn);

?>

<?php require 'elements/header.php' ?>

	<div data-role="page" id="pageone">

		<div data-role="header" data-position="fixed">
			<h1>Agentes</h1>
		</div>
		<div data-role="content">
			<div id='logo'>
				<img src="images/logo-ead.png">
			</div>
			<div>
				<form id="frmAgente" action="php/register.php" method="post" autocomplete="off">
					<select name="agentCat">
						<option value="Agente">Agente</option>
						<option value="SuperAgente">Super Agente</option>
					</select>
					<input type="text" name="agentName" id="agentName" value="" placeholder="Nome" required/>
					<input type="email" name="agentEmail" id="agentEmail" value="" placeholder="email" required/>
					<input type="password" name="agentPwd" id="agentPwd" value="" placeholder="Senha" required/>
					<div style="display:none">
						<input type="submit" id="sbmCadastrar" value="Entrar"/>
					</div>
				</form>
				<input type="button" id="btnCadastrar" value="Cadastrar">
			</div>

			<div data-role="collapsible">
				<h3>Agentes Cadastrados</h3>
				<ul data-role="listview">
					<?php
						if(@mysql_num_rows($rsAgentes)>0) {
							while($row = mysql_fetch_array($rsAgentes)) {
					?>
								<li id='agenteid_'+<?php echo $row['id'] ?>><?php echo $row['nome'] ?></li>
					<?php
							}
						}
					?>
				</ul>
			</div>


		</div>


<?php require 'elements/footer.php' ?>