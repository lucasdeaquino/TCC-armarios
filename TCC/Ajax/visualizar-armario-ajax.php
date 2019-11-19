<?php


include ('../conexao.php');

$vis = $_POST['vis'];


$select_vis = "SELECT tb_armario.nm_armario AS 'nome',  tb_tipo_armario.ds_tipo as 'tipo', tb_status.ds_status as 'status' FROM tb_armario
  inner join tb_tipo_armario on (tb_tipo_armario.cd_tipo_armario = tb_armario.id_tipo_armario)
  inner join tb_status on (tb_status.cd_status = tb_armario.id_status)
   where cd_armario = '$vis'";

$exe_select_vis = $mysqli->query($select_vis);

$row = $exe_select_vis->fetch_object();

echo 'Número do armário: '. $row->nome.'<br>
Tamnho do armário: '.$row->tipo.'<br>
Status do armário: '.$row->status.'<br>';

?>