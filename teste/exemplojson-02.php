
<?php
		$json= '[{"nome":"Jose","idade":20},{"nome":"Ansu","idade":29}]';
		$data = json_decode($json, true);
		
		var_dump($data);
		
		

?>