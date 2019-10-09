<!DOCTYPE html>
<html>
<head>
	<title>Alunos</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<meta charset="utf-8">


 </head>
    <body>
   

<?php
    include('menu-adm.php')
?>

 

      <div class="container">
         
         <form action="altera-aluno.php" method="post">
          <table  class="striped">
        <thead>
          <tr>
              <th>RM</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Senha</th>
              <th>Turma</th>
              <th>Curso</th>
              <th>Opções</th>
          </tr>
        </thead>
          <tbody>
         <?php
           
           include('../conexao.php');
             $aluno = "SELECT tb_aluno.nm_aluno AS 'nome', tb_aluno.cd_rm AS 'rm', tb_aluno.ds_email AS 'email', tb_aluno.ds_senha AS 'senha', tb_turmas.nm_turmas AS 'turma', tb_curso.nm_curso AS 'curso'
FROM tb_aluno
INNER JOIN tb_turma_aluno ON ( tb_aluno.cd_rm = tb_turma_aluno.id_rm )
INNER JOIN tb_turmas ON ( tb_turmas.cd_turmas = tb_turma_aluno.id_turmas )
INNER JOIN tb_curso ON ( tb_curso.cd_curso = tb_turmas.id_curso )
LEFT JOIN tb_reserva ON ( tb_reserva.id_aluno1_reserva = tb_aluno.cd_rm
AND tb_reserva.id_aluno2_reserva = tb_aluno.cd_rm )";
 

             if(!$exealuno = $mysqli -> query($aluno)){
                   
                   $mysqli -> error;
                  
                  }

                  else{

                    while($row = $exealuno->fetch_object()){
                       
                       echo " <tr>
            <td>".$row ->rm."</td>
            <td>".$row ->nome."</td>
            <td>".$row ->email."</td>
            <td>".$row ->senha."</td>
            <td>".$row ->turma."</td>
            <td>".$row ->curso."</td>
            <td><button class = 'btn waves-effect blue darken-1' name = 'alterar' id = 'alterar' value= ".$row->rm." >Alterar</button>
            <button class = 'btn waves-effect  teal darken-1' name = 'visualizar' id = 'visualizar' value= >visualizar</button>
            <button class = 'btn waves-effect   red darken-1' name = 'excluir' id = 'excluir' value= ><i class='material-icons'>delete</i>Excluir</button> </td>
          </tr>";

                    }

                  }

          ?>
           
        
        </tbody>
      </table>
          
    </div>
   </body>

<?php
    include('footer-adm.php')
?>


<style type="text/css">
#menu{
transition: 0.5s;
}
#menu:hover{
 color:#6495ED;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
#daora{
margin-top: -5%
   
}


  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }



</style>

 </html>
 

