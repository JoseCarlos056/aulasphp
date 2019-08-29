<?php

require_once('config.php');

echo $_SESSION['nome'];

session_unset ($_SESSION['nome']);

echo $_SESSION['nome'];
session_destroy();

?>