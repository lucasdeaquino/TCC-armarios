<!DOCTYPE html>
<html>
<head>
	<title>Reservas</title>
 </head>
    <body>

      <?php
      include('../conexao.php');

        $exibir_reserva = "SELECT tb_aluno.nm_aluno, tb_reserva.vl_reserva from tb_reserva
         inner join tb_aluno on (tb_reserva.cd_reserva =  tb_aluno.id_reserva)";

         if(!$exe_reserva = $mysqli -> query($exibir_reserva)){

         	   echo $mysqli->error;

              }

      ?>

    </body>
 </html>