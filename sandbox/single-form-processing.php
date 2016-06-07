<?php
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];	
	$message = "Logging in: {$username}<br /><br />";
} else {
	$username = "";
	$message = "Please log in.<br /><br />";
}
	
include "includes\library.php";
getHeader("PHP Examples| Form");
?>
	<style>
		.form_label	{ width: 120px; padding-bottom: 5px; }	
		input		{ margin-bottom: 15px; }
	</style>
	<header>
		<h1>PHP</h1>
		<h2>Form</h2>
	</header>
	
	<div id="wrapper">	
	
		<?php
			echo $message;
		?>
		<form action="single-form-processing.php" method="post">
			
			<div class="form_label">Username:</div> 
			<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" />
			
			<div class="form_label">Password:</div> 
			<input type="password" name="password" value="" />
			
			<br />
			
			<input type="submit" name="submit" value="Submit" />
			
		</form>
	</div>
<?php
getFooter();
?>	