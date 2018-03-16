<!DOCTYPE html>
<html>
	<head>
		<title> Soirée du film de Montagne </title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/menu.css" type="text/css">
		<link rel="stylesheet" href="css/presentation.css" type="text/css">
		<link rel="stylesheet" href="css/organisation.css" type="text/css">

		
	</head>
	<body>
	<?php
		include ('partie/menu.php');
		include ('partie/presentation.php');
		include ('partie/organisation.php');
	?>
	<script type="text/javascript" src="java/snow.js"></script>
	<script type="text/javascript">
    window.onload = function(){
        snow.init(30); // 10 flocons seront donc affichés
	};
</script>
	
	
	</body>
</html>