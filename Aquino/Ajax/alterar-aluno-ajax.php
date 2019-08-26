<?php
include('../conexao.php');

session_Start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$rm = $_POST['rm'];
$turma = $_POST['turma'];
$email = $_POST['email'];
$telefone  = $_POST['telefone'];


 
 

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
  	echo 'Alterações realizadas com sucesso.';

    session_destroy();
  }
 }
}


?>