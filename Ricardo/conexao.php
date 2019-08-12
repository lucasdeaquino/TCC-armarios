<?php
$endereco = "localhost";
$login = "root";
$senha = "usbw";
$banco = "db_tcc";
echo "<img src='legal1.jpg' width='80%' >";
$mysqli = new mysqli($endereco , $login, $senha, $banco);
if(mysqli_connect_errno())
{
	echo $mysqli -> mysql_error();

	}

?>
