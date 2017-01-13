<!DOCTYPE html>
<!-- compteuser.php -->
<?php session_start() ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Stock One - Cloud [Compte Utilisateur]</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/scroll.css" />
		<link rel="icon" type="image/png" href="../pics/icon.png" />
		<script language="javascript" type="text/javascript" src="../js/script.js"></script>
	</head>
	<?php
		try {
			$bdd = new PDO('mysql:host=127.0.0.1;dbname=stock-one;charset=utf8', 'root', 'toor');
		}
		catch(Exception $e) {
			die('ERROR : '.$e->getMessage());
		}
	?>
	<body onload="startTime();">
		<header>
			<div class="time" id="txt"></div>
			<div class="time info">
				<?php
					if(isset($_SESSION['user'])) {
						$user = $_SESSION['user'];
						$_SESSION['mode'] = "admin";
						echo("<a class='profile' title='Retour à la Page Client' href='../client.php'><img class='avatar' height='25px' src='../pics/user.png' />$user</a>");
					}
					else {
						header("location: ../index.html");
					}
				?>
			</div>
			<div class="h-butons">
				<input class="color" type="button" value="Tchat" title="Faire apparaître le tchat IRC" onclick="popupaction(5, 0);" />
				<input class="color" type="button" value="Déconnexion" onclick="popupaction(2, 1);" />
			</div>
			<img class='logo' height="30px" src="../pics/logo.png" />
			<h1>Stock One</h1>
		</header>
		<section>
			<aside id="admin_panel_left" class="left">
				<h2>Vos Informations</h2>
				<div class="content">
					<?php
						$data = $bdd->query('SELECT * FROM user');
						
						while($file = $data->fetch()) {
							if($file[0] == $user) {
								echo("<label>Votre Identifiant:</label><br />
								$file[0]<br /><br />
								<label>Votre Nom:</label><br />
								$file[1]<br /><br />
								<label>Votre Prénom:</label><br />
								$file[2]<br /><br />
								<label>Votre Sexe:</label><br />
								$file[3]<br /><br />
								<label>Votre Adresse Mail:</label><br />
								$file[4]<br /><br />
								<label>Votre Grade:</label><br />
								$file[8]</br>");
							}
						}
					?>
				</div>
			</aside>
			<aside class="admin_panel_right">
				<h2>Modification compte utilisateur</h2>
				<div class="content">
					
					<br />
					<input type="button" class="color" value="Modifier son compte" onclick="location.href='#'"/>
				</div>
			</aside>
			<div id="popup">
				
			</div>
			<div id="popupabout">
				<?php
					if(!isset($_GET['code'])) {
						echo("");
					}
					else {
						if($_GET['code'] == '1') {
							$action = 'Copie';
						}
						else if($_GET['code'] == '2') {
							$action = 'Déplacement';
						}
						else if($_GET['code'] == '3') {
							$action = 'Suppression';
						}
						
						if($_GET['etat'] == "OK") {
							$msg = '<font id="msg3">> L\'action mené au fichier à bien été éxecuter.</font>';
						}
						else if($_GET['etat'] == "ERREUR") {
							$msg = '<font id="msg0">> L\'action mené au fichier à rencontrer une erreur.</font>';
						}
						
						echo("<fieldset>");
						echo("<Legend>Confirmation de $action:</Legend>");
						echo($msg);
						echo("<br /><br />");
						echo('<input type="button" onclick="moreaction(0); document.location = \'./client.php\';" value="Fermer" />');
						echo("</fieldset>");
					}
				?>
			</div>
		</section>
		<footer>
			<h4>Auteur: Groupe STI2D SIN Déodat de Séverac - 2016 Novembre</h4>
		</footer>
		<div id="popup_irc"></div>
	</body>
</html>
<!-- END -->
