<?php
	$page = 'courses';

	require 'php/conn.php';

	$sql = "SELECT * FROM ageadcursos AS c " ;
	$sql .= "ORDER BY c.nome ";
	$rsCursos = mysql_query($sql, $conn);

?>

<?php require 'elements/header.php' ?>

	<div data-role="page" id="pageone">

		<div data-role="header" data-position="fixed">
			<h1>Cursos</h1>
		</div>
		<div data-role="content">
			<div id='logo'>
				<img src="images/logo-ead.png">
			</div>
			<div>
				<form id="frmCurso" action="" method="post" autocomplete="off">
					<input type="text" name="cursoNome" id="cursoNome" value="" placeholder="Nome do Curso" required/>
					<div style="display:none">
						<input type="submit" id="sbmCurso" value="Entrar"/>
					</div>
				</form>
				<input type="button" id="btnCadastrar" value="Cadastrar">
			</div>

			<div data-role="collapsible">
				<h3>Cursos Cadastrados</h3>
				<ul data-role="listview">
					<?php
						if(@mysql_num_rows($rsCursos)>0) {
							while($row = mysql_fetch_array($rsCursos)) {
					?>
								<li id='cursoid_'+<?php echo $row['id'] ?>><?php echo $row['nome'] ?></li>
					<?php
							}
						}
					?>
				</ul>
			</div>

		</div>


<?php require 'elements/footer.php' ?>