<?php
session_start();
session_destroy();
unset($_SESSION['name']);
header('Location: log.php?msg= You are logged out !');
?>