	<form>
		<input type ="text" name ="nome">
		<input type ="date" name ="nascimento">
		<input type ="submit" value ="OK">
	</form>

	<?php
			
	if(isset($_GET)){
		echo'<select>';
		foreach($_GET as $campo => $valor){
			echo'<option value="'.campo.'">'.$campo.'</option>';
			if($campo === nome){
				echo $valor;
				
			}else if ($campo === nascimento){
					echo $valor;
			}
			echo "o nome do campo é ".$campo."<br>";
			echo "o que foi introduzido ".$valor;
			echo "<hr>";
		
		}
		echo'</select>';
	}
			

	?>