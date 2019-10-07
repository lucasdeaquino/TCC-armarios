<!DOCTYPE html>
<html>
<head>
	<title>Reservas</title>
     <meta charset="utf-8">
 </head>
    <body>

    <?php
    include('menu-adm.php');
  ?>
<br>
<br>
<br>
<br>
<br>
  <div class="z-depth-5 " id="tabela"><table class="responsive-table">
        <thead>
          <tr>
              <th>Nome</th>
              <th>Hora</th>
          </tr>
        </thead>
        <tbody>

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

                  echo '
          <tr>
            <td>'.$row->aluno.'</td>
            <td>'.$row->hora.'</td>
          </tr>
        ';
                }
              }

      ?>
      </tbody>
      </table></div>
      <br>
<br>
<br>
<br>
<br>
<br>
<br>

      <?php


    include('footer-adm.php');
?>

    </body>
 </html>
 <style type="text/css">
   
   #tabela{

      margin-left: 6.5%;
      width: 85%;
      height: 85%;
   }
 </style>