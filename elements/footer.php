		<div data-role="footer">
			<div data-role="navbar" data-position="fixed" data-id="mainMenu">
				<ul>
					<?php if(isset($_SESSION["agentCat"])) { ?>
						<li onclick="window.location.reload(true);"><a href='index.php' data-icon="home" data-transition="slidefade">Logout</a></li>
					<?php } else { ?>
						<li><a href='index.php' data-icon="home" data-transition="slidefade">Login</a></li>
					<?php } ?>
					<li><a href='enrollments.php' data-icon="grid" data-transition="slidefade">Matrícula</a></li>
					<li><a href='report.php' data-icon="star" data-transition="slidefade">Relatório</a></li>
					<?php if(isset($_SESSION["agentCat"])) { 
						if($_SESSION["agentCat"] == 'SuperAgente') { 
					?>
							<li><a href='courses.php' data-icon="info" data-transition="slidefade">Cursos</a></li>
							<li><a href='agents.php' data-icon="bars" data-transition="slidefade">Agentes</a></li>
						<?php } ?>
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
	<?php if($page == 'agents') { ?>
	    <script src="js/agents.js"></script>
	<?php } ?>
	<?php if($page == 'courses') { ?>
	    <script src="js/courses.js"></script>
	<?php } ?>
	<?php if($page == 'enrollments') { ?>
	    <script src="js/enrollments.js"></script>
	<?php } ?>

</body>
</html>
