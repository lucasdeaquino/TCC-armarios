<?php
include('../conexao.php');


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$rm = $_POST['rm'];
$turma = $_POST['turma'];
$email = $_POST['email'];
$telefone  = $_POST['telefone'];

 $insertaluno = "INSERT into tb_aluno values (null, '$nome', 'a.png', '$rm', '$email', null, '$turma', null, '$senha')";
  if(!$exeinsert = $mysqli -> query($insertaluno)){
  	echo $mysqli ->error;
  }
 
  else{

  	echo 'Cadastro realizado com sucesso.';
  }

?>