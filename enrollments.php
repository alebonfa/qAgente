<?php
	$page = 'enrollments';

	require 'php/conn.php';

	$sql = "SELECT * FROM ageadcursos AS c " ;
	$sql .= "ORDER BY c.nome ";
	$rsCursos = mysql_query($sql, $conn);

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
				<form id="frmEnrollment" action="" method="post" autocomplete="off">
					<input type="date" name="dataInscricao" id="dataInscricao" value="" placeholder="Data da Inscricao" required/>
					<select name="curso" id="curso">
						<option value="0">Selecione o Curso</option>
						<?php
							if(@mysql_num_rows($rsCursos)>0) {
								while($row = mysql_fetch_array($rsCursos)) {
						?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['nome'] ?></option>';
						<?php
								}
							}
						?>
					</select>
					<input type="text" name="alunoNome" id="alunoNome" value="" placeholder="Nome" required/>
					<input type="email" name="alunoEmail" id="alunoEmail" value="" placeholder="email"/>
					<input type="text" name="alunoFone" id="alunoFone" value="" placeholder="Fone"/>
					<input type="text" name="alunoCPF" id="alunoCPF" value="" placeholder="CPF"/>
					<input type="text" name="alunoEndereco" id="alunoEndereco" value="" placeholder="Endereco"/>
					<input type="text" name="alunoCidade" id="alunoCidade" value="" placeholder="Cidade"/>
					<input type="text" name="alunoEstado" id="alunoEstado" value="" placeholder="Estado"/>
					<select name="forma" id="forma">
						<option value="Dinheiro">Dinheiro</option>
						<option value="Cheque">Cheque</option>
						<option value="Boleto">Boleto</option>
					</select>
					<input type="number" name="inscricao" id="inscricao" value="150.00" placeholder="Estado" required/>

					<div style="display:none">
						<input type="submit" id="sbmEnroll" value="Entrar"/>
					</div>
				</form>
				<input type="button" id="btnEnroll" value="Matricular">

			</div>
		</div>


<?php require 'elements/footer.php' ?>