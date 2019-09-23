<?php
?>
<!DOCTYPE html>
<html>

<head>
<meta name="Sacchi Marco">
<meta content="de-ch" http-equiv="Content-Language">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Tauchfragen</title>
<link href="css.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="warper">

	<header><p class="headertitel">Prüfungsfragen und Antworten</p></header>
	<nav><p class="navstyle"><a href="index.php?id=hallo">Home</a> <a href="index.php?id=material">Material</a> <a href="index.php?id=berechnung">TG-Berechnung</a>
		<a href="index.php?id=unfaelle">Unfälle</a> <a href="index.php?id=physik">Physik</a> <a href="index.php?id=anatomie">Anatomie</a></p></nav>
	<div class="content">
		<?php
		if(!isset($_GET['id'])){
			include("hallo.php");
			
			}
		else{
			$filename = $_GET['id'].".php";
			if (file_exists($filename)){
				include( $_GET['id'].".php");
				}
			else{
				include("hallo.php");
				}			
			}
			
  
		?> 
	</div>
	<div class="footer"></div>
	
</div>

</body>

</html>
