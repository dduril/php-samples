<?php
include "..\includes\library.php";
getHeader("PHP Examples| PHP Info", "PHP Info", 2);

/*
	WARNING: NEVER include this file on your production machine.
	It's useful for development but it also gives away TOO much
	information about your system if anyone got access to it.
*/
	phpinfo();

getFooter(2);
?>

