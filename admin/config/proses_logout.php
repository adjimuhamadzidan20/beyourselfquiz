<?php
session_start();

session_destroy();
session_unset();

setcookie('ID', '', time() - 3600, '/');
setcookie('KEY', '', time() - 3600, '/');

header('Location: ../login.php');
exit;
