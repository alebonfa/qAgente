		<div data-role="footer">
			<div data-role="navbar" data-position="fixed" data-id="mainMenu">
				<ul>
					<li><a href='index.php' data-icon="home" data-transition="slidefade">Login</a></li>
					<li><a href='#' data-icon="grid" data-transition="slidefade">Matrícula</a></li>
					<li><a href='#' data-icon="star" data-transition="slidefade">Relatório</a></li>
					<li><a href='#' data-icon="gear" data-transition="slidefade">Contato</a></li>
					<?php if($_SESSION["agentCat"] == 'SuperAgente') { ?>
						<li><a href='agents.php' data-icon="bars" data-transition="slidefade">Agentes</a></li>
						<li><a href='courses.php' data-icon="info" data-transition="slidefade">Cursos</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>

	</div>

    <script src="js/underscore-min.js"></script>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.mobile-1.3.2.min.js"></script>
	<?php if($page == 'login') { ?>
	    <script src="js/login.js"></script>
	<?php } ?>

</body>
</html>
