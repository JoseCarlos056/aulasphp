<form>
	<input type ="text" name ="nome">
	<input type ="date" name ="nascimento">
	<input type ="submit" value ="OK">
</form>

<?php
		
if(isset($_GET)){
	<select>
	foreach($_GET as $campo => $valor){
		<option value="'.campo.'"></option>
		echo "o nome do campo é ".$campo."<br>";
		echo "o que foi introduzido ".$valor;
		echo "<hr>";
	
	}
	</select>
}
		

?>