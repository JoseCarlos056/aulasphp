<form>
	<input type ="text" name ="nome">
	<input type ="date" name ="nascimento">
	<input type ="submit" value ="OK">
</form>

<?php
		
if(isset($_GET)){
	
	foreach($_GET as $campo => $valor){
		
		echo "o nome do campo é ".$campo."<br>";
		echo "o que foi introduzido ".$valor;
		echo "<hr>";
	
	}
}
		

?>