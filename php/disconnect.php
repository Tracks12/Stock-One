<!DOCTYPE html>
<!-- disconnect.php -->
<html>
	<?php include('./bdd_access.php'); ?>
	<head>
		<meta charset="UTF-8">
		<title>Stock One - Déconnexion</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/scroll.css" />
		<link rel="stylesheet" type="text/css" href="../css/system.css" />
		<link rel="icon" type="image/png" href="../pics/icon.png" />
		<script language="javascript" type="text/javascript" src="../js/script.js"></script>
	</head>
	<body onload="startTime();">
		<header>
			<div class="time" id="txt"></div>
			<img class='logo' height="30px" src="../pics/logo.png" />
			<h1>Stock One </h1>
		</header>
		<section>
			<?php
				$_SESSION['user'] = NULL;
				header('location: ../#');
			?>
		</section>
		<footer>
			<h4></h4>
		</footer>
	</body>
</html>
<!-- END -->
