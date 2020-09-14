<?php
session_start();
// remove all session variables
unset($_SESSION['email']);
session_unset(); 

// destroy the session 
session_destroy(); 

	echo"<script>window.location.href='login.php'</script>";
?>
