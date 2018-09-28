<?php 

session_start();

session_unset($_SESSION['userid']);

echo "<script>window.location='../dialin/index.php';</script>";	 

?>