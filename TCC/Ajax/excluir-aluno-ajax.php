<?php
include('../conexao.php');

session_start();
  date_default_timezone_set("Brazil/East");
   $date = date('d/m/y');
  $time = date('H:i:s');
$rm = $_POST['excluir'];


 
    $procurar_reserva = "SELECT * FROM tb_reserva WHERE id_aluno1_reserva = '$rm' or id_aluno2_reserva = '$rm'";

    $exe_procurar_reserva = $mysqli -> query($procurar_reserva);

    if($exe_procurar_reserva -> num_rows>0){
       

      $delete_reserva = "DELETE FROM tb_reserva WHERE id_aluno1_reserva = '$rm' or id_aluno2_reserva = '$rm'";
      
      $exe_delete_reserva = $mysqli->query($delete_reserva);

    }



  	$delete_turma = "DELETE FROM tb_turma_aluno  WHERE id_rm = '$rm'";

     $exe_turma = $mysqli -> query($delete_turma);
  	
    

 
$delete_aluno = "DELETE FROM tb_aluno WHERE cd_rm = '$rm'";
  
  $exe_delete_aluno = $mysqli -> query($delete_aluno);
 $adm = $_SESSION['id_adm'];
 $inserir_registro = "INSERT INTO tb_registro_adm VALUES(null, '$date', '$time', '$adm', 'Excluir Aluno')";
 $exe_inserir_registro = $mysqli -> query($inserir_registro);
 

  	echo "Deletado com sucesso.";
  


?>