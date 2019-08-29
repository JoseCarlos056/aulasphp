
<?php
		
$condicao = true;

while($condicao){
	
	$numero = rand(1,100);
	
	if($numero === 2){
		
		echo"||||||Deu|||||||||| ".$numero;
		$condicao = false;
		
		
}
echo $numero." ---- ";
}

?>