<?php

include('../conexao.php');

// Verificar se existe um usuário

  $rm = $_POST['rm'];
  $senha = $_POST['senha'];
  

  $consultuser = "SELECT * from tb_aluno where ds_rm = '$rm' and ds_senha = '$senha'";
  if(!$exeuser = $mysqli -> query($consultuser)){

  	echo $mysqli ->error;
  }
 

   else{
    
    if($exeuser -> num_rows > 0){
 
        // Se existir, ir para a página inicial
  

          echo "location.href = 'inicial.php';";

       }

       else{
           

       	echo 'RM e/ou senha incorreta(s).';
       }
    }


?>