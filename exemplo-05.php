<?php

$nome = "Jose";


function teste(){
	
	global $nome;
	echo $nome."aaa";
}
function teste2(){
	
echo $nome."aaa";
}
teste();
teste2();

?>