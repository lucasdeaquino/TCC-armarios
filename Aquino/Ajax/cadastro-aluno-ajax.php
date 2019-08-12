<?php
include('../conexao.php');


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$rm = $_POST['rm'];
$turma = $_POST['turma'];
$email = $_POST['email'];
$telefone  = $_POST['telefone'];

 $insertaluno = "INSERT into tb_aluno values ('$rm', '$nome', 'a.png',  '$email', '$senha')";
  if(!$exeinsert = $mysqli -> query($insertaluno)){
  	echo $mysqli ->error;
  }
 
  else{

  	$insert_turma = "INSERT into tb_turma_aluno values (null, '$turma', '$rm')";

     if(!$exe_turma = $mysqli -> query($insert_turma)){
  	echo $mysqli ->error;
  }

    else{
  	echo 'Cadastro realizado com sucesso.';
  }
}

?>