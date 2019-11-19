<?php
include('../conexao.php');

session_start();
  date_default_timezone_set("Brazil/East");
   $date = date('d/m/y');
  $time = date('H:i:s');
$cd = $_POST['excluir'];

$delete_armario = "DELETE FROM tb_armario WHERE cd_armario = '$cd'";
$exe = $mysqli ->query($delete_armario);

//Inserindo o registro, após excluir o armário
  $adm = $_SESSION['id_adm'];
 $inserir_registro = "INSERT INTO tb_registro_adm VALUES('$adm', '$date', '$time', '$adm', 'Excluir Armário')";
   $exe_inserir_registro = $mysqli -> query($inserir_registro);
 

  	echo "Deletado com sucesso.";
  


?>