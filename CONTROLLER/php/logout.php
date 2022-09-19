<?php
session_start();
session_destroy();
header("Location: ../../VIEWS/app/login.php");
?>