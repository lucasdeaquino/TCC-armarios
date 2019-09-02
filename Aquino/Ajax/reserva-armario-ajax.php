  <?php

include('../conexao.php');
session_start();
  
  $reserva = $_POST['reserva'];
  $date = date('d/m/y');
  $time = date('H:i:s');
  $aluno = $_SESSION['id_aluno'];

  $reservar_armario = "INSERT INTO tb_reserva VALUES (null, '$date', '$time', '$aluno', null, null, '$reserva')";

  if(!$exe_reservar_armario = $mysqli->query($reservar_armario)){
 

    echo $mysqli->error;

  } 
  

  else{

  	echo 'Reservado com sucesso';
  }

  ?>