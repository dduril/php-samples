<?php
include "..\includes\library.php";
getHeader("PHP Examples| File Upload", "File Upload", 2);

$upload_errors = array(
	UPLOAD_ERR_OK			=> "No errors.",
	UPLOAD_ERR_INI_SIZE		=> "Larger than upload_max_filesize.",
	UPLOAD_ERR_FORM_SIZE	=> "Larger than MAX_FILE_SIZE.",
	UPLOAD_ERR_PARTIAL		=> "Partial upload.",
	UPLOAD_ERR_NO_FILE		=> "No file.",
	UPLOAD_ERR_NO_TMP_DIR	=> "No temporary directory.",
	UPLOAD_ERR_CANT_WRITE	=> "Can't write to disk.",
	UPLOAD_ERR_EXTENSION	=> "File upload stopped by extension."
);

if(isset($_POST['submit'])) {

	$tmp_file = $_FILES['file_upload']['tmp_name'];
	$target_file = basename($_FILES['file_upload']['name']);
	$upload_dir = "uploads";
	
	if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)) {
		$message = "<div style=\"font-weight: bold; color: #090;\">";
		$message .= "File uploaded successfully.";
		$message .= "</div>";
	} else {
		$error = $_FILES['file_upload']['error'];
		$message = "<div style=\"font-weight: bold; color: #900;\">";
		$message = $upload_errors[$error];
		$message .= "</div>";
	}

	/* ---- debugging ---- */
	//echo "<pre>";
	//print_r($_FILES['file_upload']);
	//echo "</pre>";
	//echo "<hr />";
}
?>
	<style>
		.form_label{
			width: 120px;
			padding-bottom: 5px;
		}
		
		input{
			margin-bottom: 15px;
		}
	</style>

		<?php // 1 megabyte == 1,048,576 bytes. ?>	
		<?php if(!empty($message)) { echo "<p>{$message}</p>"; } ?>

		<form action="upload.php" enctype="multipart/form-data" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
			
			<div class="form_label">File:</div> 
			<input type="file" name="file_upload" /> <br />
			
			<input type="submit" name="submit" value="Submit" />	
		</form>

<?php
getFooter(2);
?>	