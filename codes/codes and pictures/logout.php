<?php
session_start();
session_unset(); //destroying the session
header("Location:login.php");
?>
