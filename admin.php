<!DOCTYPE html>
<!-- admin.php -->
<html>
	<?php include("./bdd_access.php"); ?>
	<head>
		<meta charset="UTF-8">
		<title>Stock One - Cloud [ADMIN MODE]</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css" />
		<link rel="stylesheet" type="text/css" href="./css/scroll.css" />
		<link rel="icon" type="image/png" href="./pics/icon.png" />
		<?php include("./pages/theme.php"); ?>
		<script language="javascript" type="text/javascript" src="./js/script.js"></script>
	</head>
	<body onload="startTime();">
		<header>
			<div class="time" id="txt"></div>
			<div class="time info">
				<?php
					if(isset($_SESSION['user'])) {
						$user = $_SESSION['user'];
						$_SESSION['mode'] = "admin";
						echo("<a class='profile' title='Paramètre du Compte Utilisateur' href='./pages/compteuser.php'><img class='avatar' height='25px' src='./pics/".$dir."user.png' />$user</a>");
					}
					else { header("location: ./index.html"); }
					
					if($_SESSION['profile'] != "ADMIN") { header("location: ./index.html"); }
				?>
			</div>
			<div class="h-butons">
				<div class="userswitch">
					<input type="checkbox" name="userswitch" class="userswitch-checkbox" id="myuserswitch" onclick="adminswitch(2);" checked>
					<label class="userswitch-label" for="myuserswitch">
						<span class="userswitch-inner"></span>
						<span class="userswitch-switch"></span>
					</label>
				</div>
				<input class="color" type="button" value="Tchat" title="Faire apparaître le tchat IRC" onclick="popupaction(5);" />
				<input class="color" type="button" value="Créer un dossier" onclick="popupaction(3);" />
				<input class="color" type="button" value="Importer" onclick="popupaction(1, 0 , 0);" />
				<input class="color" type="button" value="Déconnexion" onclick="popupaction(2);" />
			</div>
			<img class='logo' height="30px" src="./pics/logo.png" />
			<h1>Stock One</h1>
		</header>
		<section>
			<aside id="admin_panel_left" class="left">
				<h2>Locations [./files/]</h2>
				<div class="content">
					<?php
						$data = [$bdd->query('SELECT * FROM user'), $bdd->query('SELECT * FROM donnee')];
						
						while($file = $data[0]->fetch()) {
							$data[1] = $bdd->query('SELECT * FROM donnee');
							$occupied_space = 0;
							
							while($file2 = $data[1]->fetch()) {
								if($file2[1] == $file[0]) {
									$occupied_space = $occupied_space + $file2[5];
									//$filediscover = ["'$file2[0]','$file2[1]','$file2[2]','$file2[3]','$file2[4]','$file2[5]','$file2[6]','$file2[7]'"];
								}
							}
							
							echo("<img class=\"classement\" height=\"15px\" src=\"./pics/".$dir."user.png\" /><input class=\"list\" type=\"button\" value=\"$file[0]\" title=\"$file[0]\" onclick=\"view_param(1, '$file[0]', '$file[1]', '$file[2]', '$file[3]', '$file[4]', '$file[5]', '$file[6]', '$file[7]', '$file[8]', '$occupied_space');\" /><br />");
						}
					?>
				</div>
			</aside>
			<aside class="admin_panel_right">
				<h2>Commandes</h2>
				<div id="frame_param">
					<div class="info_selected">
						<h3 id="selected">Affichage de: </h3>> 
						<input type="button" value="Données Utilisateurs" onclick="" />
						<input type="button" value="Paramètre Profile" onclick="" />
						<br /><br />
						<h3>Paramètre Afficher:</h3>
					</div>
					<div id="info_param">
						<p>Veuillez selectionnez un compte...</p>
					</div>
				</div>
			</aside>
			<div id="popup"></div>
			<div id="popupabout">
				<?php
					if(!isset($_GET['code'])) { echo(""); }
					else {
						switch($_GET['code']) {
							case 1: $action = 'Copie'; $objet = 'fichier'; $directory = 'client.php'; break;
							case 2: $action = 'Déplacement'; $objet = 'fichier'; $directory = 'client.php'; break;
							case 3: $action = 'Suppression'; $objet = 'fichier'; $directory = 'client.php'; break;
							case 4: $action = 'Importation'; $objet = 'fichier'; $directory = 'admin.php'; break;
							case 5: $action = 'Modification'; $objet = 'compte'; $directory = 'admin.php'; break;
						}
						
						switch($_GET['etat']) {
							case 'OK': $msg = '<font id="msg3">> L\'action mené au '.$objet.' à bien été éxecuter.</font>'; break;
							case 'ERREUR': $msg = '<font id="msg0">> L\'action mené au '.$objet.' fichier à rencontrer une erreur.</font>'; break;
						}
						
						echo("<fieldset>");
						echo("<Legend>Confirmation de $action:</Legend>");
						echo($msg);
						echo("<br /><br />");
						echo('<input type="button" onclick="moreaction(0); document.location = \'./'.$directory.'\';" value="Fermer" />');
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
