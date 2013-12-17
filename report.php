<?php
	$page = 'report';

	session_start("agead");
	$agentID = $_SESSION["agentID"];

	require 'php/conn.php';

	$sql = "SELECT m.*, c.nome As curso FROM ageadmatriculas AS m, ageadusuarios AS u, ageadcursos AS c " ;
	$sql .= "WHERE m.user_id = u.id AND m.curso_id = c.id ";
	$sql .= "AND m.user_id = $agentID ";
	$sql .= "ORDER BY m.data DESC ";
	echo $sql;
	$rsMatriculas = mysql_query($sql, $conn);

	echo $rsMatriculas

?>

<?php require 'elements/header.php' ?>

	<div data-role="page" id="pageone">

		<div data-role="header" data-position="fixed">
			<h1>Listagem de Inscrições</h1>
		</div>
		<div data-role="content">
			<div id='logo'>
				<img src="images/logo-ead.png">
			</div>

			<ul data-role="listview">
				<?php
					if(@mysql_num_rows($rsMatriculas)>0) {
						while($row = mysql_fetch_array($rsMatriculas)) {
				?>
							<li id='matid_'+<?php echo $row['id'] ?>>
								<?php echo $row['nome']  ?><br>
								<?php echo date("d/m/Y", strtotime($row['data'])) ?><br>
								<?php echo $row['curso'] ?><br>
								<?php echo $row['forma'] . ' - ' . number_format($row['valor'],2,',','.') ?><br>
							</li>
				<?php
						}
					}
				?>
			</ul>

		</div>


<?php require 'elements/footer.php' ?>