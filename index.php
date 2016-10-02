<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ChinPOKOMON Main Page</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
			body {
				background-color: #434343;
			}
		</style>
	</head>
	<body>
		<div>
			<a class="gameName" href="index.php">SouthPark CHINPOKOMON</a>
		</div>
		<?php
			include('Menu.php');
			include('Content.php');
			echo Menu::getMenu($_GET['page']);
			echo Content::getPageContent($_GET['page']);
		?>
	</body>
</html>