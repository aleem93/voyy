<?php
	session_start();
	unset($_SESSION['username']);
	echo "<script>location.href='admin_login.php'</script>";
?>