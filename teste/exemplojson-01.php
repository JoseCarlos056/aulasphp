
<?php
		$pessoas = array();
		
		array_push($pessoas, array(
		'nome'=>'Jose',
		'idade' => 20
		));
		array_push($pessoas, array(
		'nome'=>'Ansu',
		'idade' => 29
		));
		
		print_r($pessoas);
		echo"<br>";
		echo"<br>";
		echo"<hr>";
		echo json_encode($pessoas);
		
		

?>