<?php

  $anoNascimento = 1995;
  $nomeCompleto = "Diego Perillo";
  
  echo "Olá meu nome é: " .$nomeCompleto. " e nasci no ano de: " .$anoNascimento;
  
  echo "<br />";
  
  //exclui as variaveis
  unset($anoNascimento, $nomeCompleto);
  
  //isset() verifica se a variavel existe
  if(isset($anoNascimento) && isset($nomeCompleto))
  {
  	echo "Olá meu nome é: " .$nomeCompleto. " e nasci no ano de: " .$anoNascimento;
  }
  else
  {
	echo "As variaveis nao foram encontradas";  
  }
  
  //Onde tiver esse comando encerra a execução
  exit;

?>