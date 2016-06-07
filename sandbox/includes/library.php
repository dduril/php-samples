<?php
function getHeader($title)
{
?>
	<!doctype html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/reset.css" type="text/css">
	<link rel="stylesheet" href="./styles/main.css" type="text/css" media="screen, projection">
	</head>
	<body>
<?php
}	
?>
	
<?php
function getFooter()
{
?>
	<footer>
	<p>&copy; 2015</p>	
	</footer>
	</body>
	</html>
<?php
}
?>	