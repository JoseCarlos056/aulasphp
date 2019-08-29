<?php

require_once('config.php');
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
echo"<br>";

define ("BANCO_DE_DADOS",[
		'127.0.0.1',
		'root',
		'senha',
		'teste'
		], true);
		//o "true" no final é pro nome do banco ser sensitive ou insentive, não é bom usar.
		
		print_r (BANCO_DE_DADOS);
?>