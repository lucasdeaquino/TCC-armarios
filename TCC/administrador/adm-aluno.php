<!DOCTYPE html>
<html>
<head>
	<title>Alunos</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta charset="utf-8">
 </head>
    <body>
      <div class="container">
         
         <form action="altera-aluno.php" method="post">
          <?php
           
           include('../conexao.php');
             $aluno = "SELECT tb_aluno.nm_aluno as 'nome', tb_aluno.cd_rm as 'rm', tb_aluno.ds_email as 'email', tb_aluno.ds_senha as 'senha', tb_turmas.nm_turmas as 'turma', tb_curso.nm_curso as 'curso' FROM tb_aluno
   inner join tb_turma_aluno on (tb_aluno.cd_rm = tb_turma_aluno.id_rm)
   inner join tb_turmas on (tb_turmas.cd_turmas = tb_turma_aluno.id_turmas)
   inner join tb_curso on (tb_curso.cd_curso = tb_turmas.id_curso)";
 

             if(!$exealuno = $mysqli -> query($aluno)){
                   
                   $mysqli -> error;
                  
                  }

                  else{

                    while($row = $exealuno->fetch_object()){
                       
                       echo $row ->nome.' '.$row ->rm.' '.$row ->email.' '.$row ->senha.' '.$row ->turma.' '.$row ->curso." <button class = 'bnt btn-primary' name = 'alterar' id = 'alterar' value= ".$row->rm." >Alterar</button> <br>";
                    }

                  }

          ?>
    </div>
   </body>
 </html>