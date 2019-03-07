<?php
session_start();
session_destroy();
unset($_SESSION['type']);
header('location: index.php')

?>