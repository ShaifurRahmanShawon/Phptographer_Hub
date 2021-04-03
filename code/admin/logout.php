<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();
header("Location:/Projects/Admin/index.php");
?>