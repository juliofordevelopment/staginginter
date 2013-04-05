This is a test
<?php
include_once 'debugmode.php';
if (On_Stage_server()){
	echo "stage on " .gethostname();
} else {
	echo "On production";
}


phpinfo()
?>
