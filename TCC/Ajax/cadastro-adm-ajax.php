<?php
include('../conexao.php');


$cod = $_POST['cod'];
$senha = $_POST['senha'];


 $insertaluno = "INSERT into tb_adm values (null, '$cod', '$senha')";
  if(!$exeinsert = $mysqli -> query($insertaluno)){
  	echo $mysqli ->error;
  }
 
  else{

  	echo 'Cadastro realizado com sucesso.';
  }

?>