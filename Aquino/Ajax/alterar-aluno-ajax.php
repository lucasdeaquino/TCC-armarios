<?php
include('../conexao.php');

session_Start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$rm = $_POST['rm'];
$turma = $_POST['turma'];
$email = $_POST['email'];
$telefone  = $_POST['telefone'];
$id_aluno = $_SESSION['altera'];

 
    $procurar_reserva = "SELECT * FROM tb_reserva WHERE id_aluno1_reserva = '$id_aluno' or id_aluno2_reserva = '$id_aluno'";

    $exe_procurar_reserva = $mysqli -> query($procurar_reserva);

    if($exe_procurar_reserva -> num_rows>0){
     
     $row_reserva = $exe_procurar_reserva->fetch_object();
     
    $data = $row_reserva->dt_reserva;
    $hora = $row_reserva->hr_reserva;
    $adm = $row_reserva->id_adm_res;
    $armario = $row_reserva->id_armario_reserva;

     if($id_aluno == $row_reserva->id_aluno1_reserva){
        
        $id1 = $row_reserva->id_aluno2_reserva;
     }           

      else{

        $id1 = $row_reserva->id_aluno1_reserva;
      }

      $delete_reserva = "DELETE FROM tb_reserva WHERE id_aluno1_reserva = '$id_aluno' or id_aluno2_reserva = '$id_aluno'";
      
      $exe_delete_reserva = $mysqli->query($delete_reserva);

    }

  	$delete_turma = "DELETE FROM tb_turma_aluno  WHERE cd_turma_aluno = '".$_SESSION['turma_aluno']."'";

     if(!$exe_turma = $mysqli -> query($delete_turma)){
  	echo $mysqli ->error;
  }
    
  else{

     $altera_aluno = "UPDATE tb_aluno SET cd_rm = '$rm',
 nm_aluno = '$nome',
 ds_email = '$email',
 ds_senha = '$senha' WHERE cd_rm = '".$_SESSION['altera']."'";

  if(!$exeinsert = $mysqli -> query($altera_aluno)){
    echo $mysqli ->error;
  }

    else{

      $insert_turma = "INSERT INTO tb_turma_aluno VALUES( null,'$turma', '$rm')";
      if(!$exe_turma_aluno = $mysqli -> query($insert_turma)){

}
   
   else{
    $insert_reserva = "INSERT INTO tb_reserva VALUES( null,'$data', '$hora', '$rm', '$id1', '$adm', '$armario')";
    if(!$exe_insert_reserva = $mysqli->query($insert_reserva)){
      echo $mysqli->error;
    }
    else{
  	echo 'Alterações realizadas com sucesso.';

    session_destroy();
   }
  }
 }
}


?>