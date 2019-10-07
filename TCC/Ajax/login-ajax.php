<?php

include('../conexao.php');

session_start();

// Verificar se existe um usuário

  $rm = $_POST['rm'];
  $senha = $_POST['senha'];
  

  $consultuser = "SELECT * from tb_aluno where cd_rm = '$rm' and ds_senha = '$senha'";
  if(!$exeuser = $mysqli -> query($consultuser)){

  	echo $mysqli ->error;
  }
 

   else{
    
    if($exeuser -> num_rows > 0){
      $row = $exeuser -> fetch_object();
 
        // Se existir, ir para a página inicial
             $_SESSION['id_aluno'] = $row ->cd_rm;
  $_SESSION['nm_aluno'] = $row ->nm_aluno;

          echo "location.href = 'home.php';";

       }

       else{
       
       // Consultando se existe um administrador

            $consultadm = "SELECT * from tb_adm where nm_adm = '$rm' and senha_adm = '$senha'";

            if(!$exeadm = $mysqli -> query($consultadm)){

    echo $mysqli ->error;
  }

      
      else{

        if($exeadm -> num_rows > 0){
 
        // Se existir, ir para a página inicial de administrador
  

          echo "location.href = 'administrador/adm-inicial.php';";

       }

       else{


          echo 'RM e/ou senha incorreta(s).';
         }

       }

    }

  }



?>