<?php

$anoNascimento = 1999;

$nomeCompleto = "José Carlos";

//limpar variavel
echo $anoNascimento;
echo "<br>";
//unset($anoNascimento);

//So da o echo se tiver falor na variavel "isset"
if(isset($anoNascimento)){
    echo $anoNascimento;
}else{
    echo "eu achoq nao";
}

//comcatenando variaveis
$anoeNome = $anoNascimento.$nomeCompleto;
echo $anoeNome;
exit;

?>