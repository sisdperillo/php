<?php

  //Tipos básico de variavéis
  $nome = "Diego Perillo";
  $site = 'www.uol.com.br';
  $ano = 2018;
  $salario = 2300.51;
  $bloqueado = false;
  //////////////////////////////////////////////////
  
  $frutas = array("abacaxi", "laranja", "manga");
  $anos = array(1990, 2018, 2001);
  
  echo $frutas[2];
    
  $nascimento = new DateTime();
  
  //var_dump($nascimento);
  //////////////////////////////////////////////////
  
  $arquivo = fopen("exemplo-03.php", "r");
  //var_dump($arquivo);
  
  $nulo = NULL;
  $vazio = "";
  
?>