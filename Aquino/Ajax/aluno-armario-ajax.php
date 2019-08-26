<?php

include('../conexao.php');


$op = $_POST['op'];


$exibir_op = "SELECT * FROM tb_armario where id_tipo_armario = '$op'";
$exe_op = $mysqli -> query($exibir_op);

while($row_op = $exe_op -> fetch_object()){

 echo $row_op ->nm_armario;
}



?>