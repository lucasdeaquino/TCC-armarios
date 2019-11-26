<?php
include('../conexao.php');

$rec = $_POST['rec'];

$deletar_reserva = "DELETE from tb_reserva where
cd_reserva = '$rec'";

$exe = $mysqli->query($deletar_reserva);

?>