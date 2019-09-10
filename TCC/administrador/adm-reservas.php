<!DOCTYPE html>
<html>
<head>
	<title>Reservas</title>
 </head>
    <body>

      <?php
      include('../conexao.php');

        $exibir_reserva = "SELECT tb_aluno.nm_aluno as 'aluno', tb_reserva.dt_reserva as 'hora' from tb_reserva
         inner join tb_aluno on ( tb_aluno.cd_rm =  tb_reserva.id_aluno1_reserva)
         ";

         if(!$exe_reserva = $mysqli -> query($exibir_reserva)){

         	   echo $mysqli->error;

              }

              else{

                while($row = $exe_reserva->fetch_object()){
                  echo $row->hora;
                  echo $row->aluno;
                }
              }

      ?>

    </body>
 </html>