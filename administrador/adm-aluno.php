<!DOCTYPE html>
<html>
<head>
	<title>Alunos</title>
 </head>
    <body>
          
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
                       
                       echo $row ->nome.$row ->rm.$row ->email.$row ->senha.$row ->turma.$row ->curso."<br>";
                    }

                  }

          ?>

   </body>
 </html>