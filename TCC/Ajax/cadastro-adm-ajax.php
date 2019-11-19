<?php
include('../conexao.php');


$cod = $_POST['cod'];
$senha = $_POST['senha'];


 $insertaluno = "INSERT into tb_adm values (null, '$cod', '$senha')";
  if(!$exeinsert = $mysqli -> query($insertaluno)){
  	echo $mysqli ->error;
  }
 
  else{
 $adm = $_SESSION['id_adm'];
 $inserir_registro = "INSERT INTO tb_registro_adm VALUES(null, '$date', '$time', '$adm', 'Cadastrar Administrador')";
 $exe_inserir_registro = $mysqli -> query($inserir_registro);
  	echo 'Cadastro realizado com sucesso.';
  }

?>