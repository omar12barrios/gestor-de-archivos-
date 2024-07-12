<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Gestor Traductores</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type="text/css" href="admin/css/bootstrap.css" />
		<link rel = "stylesheet" type="text/css" href="admin/css/style.css" />
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color:green;">
		<div class="container-fluid">
			<label class="navbar-brand" id="title">Sistema Gestor de Archivos</label>
		</div>
	</nav>
	<img src="unerg.png.png" alt="Imagen en esquina derecha inferior" class="image-corner">
	<?php include 'login.php'?>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Traductores <?php echo date("Y", strtotime("+8 HOURS"))?></label>
	</div>
</body>
</html>