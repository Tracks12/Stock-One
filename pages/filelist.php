<!DOCTYPE html>
<!-- vupload.php -->
<html>
	<?php
		include('../bdd_access.php'); $a = '.';
		include('./module.php');
	?>
	<head>
		<meta charset="UTF-8">
		<title>Stock One - Listing de fichiers</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/scroll.css" />
		<link rel="icon" type="image/png" href="../pics/icon.png" />
		<?php if(isset($_SESSION['user'])) { include('./theme.php'); } ?>
	</head>
	<body>
		<form action="./filelist.php" method="get">
			<?php
				if(isset($_SESSION['user'])) {
					$user = $_SESSION['user'];
					$_SESSION['mode'] = 'admin';
				}
				else { header('location: ../#'); }
				
				if($_SESSION['profile'] != 'ADMIN') { header('location: ../client.php'); }
				
				echo('<input type="hidden" name="target" value="'.$_GET['target'].'" />');
				for($tour = 0; $tour < 2; $tour++) {
					$data = [$bdd->query('SELECT * FROM donnee'), $bdd->query('SELECT * FROM donnee'), $bdd->query('SELECT * FROM donnee')];
					
					switch($tour) {
						case 0:
							while($file = $data[0]->fetch()) {
								if($_GET['target'] == $file[1]) { list_dossiers($file, $dir, $a); }
							} break;
						
						case 1:
							while($file = $data[0]->fetch()) {
								if($_GET['target'] == $file[1]) { list_fichiers($file, $dir, $a); }
							} break;
					}
				}
			?>
		</form>
	</body>
</html>
<!-- END -->