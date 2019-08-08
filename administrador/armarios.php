<!DOCTYPE html>
<html>
<head>
	<title>Armários</title>
	<meta charset="utf-8">
</head>
<body>

 <?php

include('../conexao.php');

  $sqlarmarios = "SELECT tb_armario.nm_armario as 'armario', tb_tipo_armario.ds_tipo as 'tipo' FROM tb_armario
  inner join tb_tipo_armario on (tb_tipo_armario.cd_tipo_armario = tb_armario.id_tipo_armario)";

  $exearmarios = $mysqli -> query($sqlarmarios);

 
 while($row = $exearmarios -> fetch_object()){

 	echo "Número: ".$row ->armario."  Tipo: ".$row ->tipo."  ";

 }

   ?>

</body>
</html>