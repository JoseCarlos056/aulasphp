
<?php
		$pessoas = array();
		
		array_push($pessoas, array(
		'nome'=>'José',
		'idade' => 20
		));
		array_push($pessoas, array(
		'nome'=>'Ansu',
		'idade' => 29
		));
		
		print_r($pessoa);
		

		echo json_encode($pessoas);
		
		

?>