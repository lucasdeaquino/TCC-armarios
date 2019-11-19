<?php
 include('../conexao.php');
 session_start();
$alterar = $_SESSION['alter'];
 

$armario = $_POST['armario'];
$tamanho = $_POST['cadastrar'];
$status = $_POST['status'];

$alterar_armario = "UPDATE tb_armario SET
nm_armario = '$armario',
id_tipo_armario = '$tamanho',
id_status = '$status' WHERE  cd_armario = '$alterar'";

if(!$exe_insert = $mysqli -> query($alterar_armario)){

     echo $mysqli->error;
   }
     else{
     	echo 'Alterado com sucesso com sucesso';
     }
  
?>