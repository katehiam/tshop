<?php

session_start();
unset($_SESSION["currentUser"]);
// redirect
header("Location:home.php");
exit;

?>