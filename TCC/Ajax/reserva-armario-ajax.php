  <?php




include('../conexao.php');
session_start();
  
  $reserva = $_POST['reserva'];

  date_default_timezone_set("Brazil/East");

  $date = date('d/m/y');
  $time = date('H:i:s');
  $aluno = $_SESSION['id_aluno'];

  //Consultando se o aluno já tem uma reserva

  $consultar_reserva = "SELECT *FROM tb_reserva where id_aluno1_reserva = '$aluno' or id_aluno2_reserva = '$aluno'"; 
  $exe_consultar_reserva = $mysqli -> query($consultar_reserva);

  
  if($exe_consultar_reserva -> num_rows >0){

    //Se houver, não é possível realizar outra

   echo("Você já tem um armário reservado!");

  }


//Se não houver, será cadastrado a reserva


  else{
    
     //Se for dividir

     if($_POST['dividir'] != 0){

      $dividir = $_POST['dividir'];

  $reservar_armario = "INSERT INTO tb_reserva VALUES (null, '$date', '$time', '$aluno', '$dividir', null, '$reserva')";

  if(!$exe_reservar_armario = $mysqli -> query($reservar_armario)){
 

    echo $mysqli->error;

  } 
  

  else{

    echo 'Reservado com sucesso';
  }
}
//Se não for dividir
  else{
   

   $reservar_armario = "INSERT INTO tb_reserva VALUES (null, '$date', '$time', '$aluno', null, null, '$reserva')";

  if(!$exe_reservar_armario = $mysqli -> query($reservar_armario)){
 

    echo $mysqli->error;

  } 
  

  else{

    echo 'Reservado com sucesso';
  }
  }
  
}
  ?>