<?php
include('../conexao.php');



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
 
 

  	echo "Deletado com sucesso.";
  


?>