<?php
function getHeader($title, $subtitle, $depth)
{
?>
	<!doctype html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if ($depth == 1) { ?>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" type="text/css">
    <?php } else { ?>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" type="text/css">
    <?php } ?>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
	</head>
	<body>
	<div class="container">   
        <div class="row row-content">
            <div class="col-xs-12">    
              <h1>PHP</h1>
              <h2><?php echo $subtitle; ?></h2> 
              <hr>        
<?php
}	
?>
	
<?php
function getFooter($depth)
{
?>
            </div>
        </div>
        <br /><br />
        <footer>
            <?php if ($depth != 1) { ?><p><strong><a href="../index.php">Back</a></strong></p><?php } ?>	
	    </footer>
    </div>
    <?php if ($depth == 1) { ?>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <?php } else { ?>
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <?php } ?>
	</body>
	</html>
<?php
}
?>	