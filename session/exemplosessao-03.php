<?php


session_id('asdasdas');



require_once('config.php');

//imprimindo a id da sessão 
echo session_id();
echo'<br>';
//Gerando uma nova
session_regenerate_id();
echo session_id();
var_dump($_SESSION);




?>