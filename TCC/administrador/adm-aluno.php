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


<meta charset="utf-8">
 </head>
    <body>

<?php 
include('menu-adm.php');
 
 ?>
<div id="cadastro"><div id="fundo"><br><div  class="z-depth-2"><div id="cadastro"><br><br>

      <div class="container">
     <script>  
          $(document).ready(function(){
            $('.visualizar').click(function(){
    $('.modal').modal();
  });
            $('.excluir').click(function(){
    $('.modal').modal();
  });
  });
</script>
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

         session_start();
           if(empty($_SESSION['id_adm'])){
            header('location: ../login.php');

           }

           
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
            <form action='altera-aluno.php' method='post'>
            <td><button class = 'btn waves-effect blue darken-1' name = 'alterar' id = 'alterar' value= ".$row->rm." >Alterar</button>
            </form>
            <button data-target='modal1' class = 'btn waves-effect  teal darken-1 modal-trigger visualizar' name = 'visualizar' id = 'visualizar' value=".$row->rm." >visualizar</button>
            <button data-target='modal1' class = 'btn waves-effect   red darken-1 modal-trigger excluir' name = 'excluir' id = 'excluir' value=".$row->rm." ><i class='material-icons'>delete</i>Excluir</button> </td>
          </tr>";

                    }

                  }

          ?>
       
         
        
        </tbody>
      </table>


 <script>    
          $(document).ready(function(){

        //Visualização

            $('.visualizar').click(function(){
              var text1 = 'Informações';
              var sub = 'Modo de visualização.';
              $('.inf').text(text1);
              $('.sub').text(sub);
              $('.prep').empty();

     var dados = {'vis': $(this).val()};
     $.ajax({
      
    
      type: 'POST',
      url: '../Ajax/visualizar-aluno-ajax.php',
      data: dados, 

      success : function(response){
            
         
             
       eval($(".mod").html(response));

       
      }
    
        });
  });

     $('#close').click(function(){
       
       $('.modal').modal('hide');

     });

    $('.excluir').click(function(){

     var value = $(this).val();

      var text = 'Você tem certeza que deseja excluir o(a) aluno(a)?';
      var confirm = '<button class=" conf btn waves-effect waves-light" type="button" name="action" >Confirmar <i class="material-icons right">send</i></button>';
        $('.mod').empty();
        $('.sub').empty();
        $('.inf').text(text);
        $('.prep').html(confirm);
        $('.conf').attr('value', value);
        

        $('.conf').click(function(){
      com = $(this).val();
        var date = {'excluir': $(this).val()};

      $.ajax({
      
    
      type: 'POST',
      url: '../Ajax/excluir-aluno-ajax.php',
      data: date, 

      success : function(response){
            
         
             
       alert(response);

       
      }
    
        });
      });
    });
    
    
  });
</script>
<!-- Modal de visualização -->

   <div id="modal1" class="modal">
     <div class="modal-content">
       <h4 class="inf"></h4>
    <p class="sub"></p>
   <span class="mod"></span>
 </div>

    <div class="modal-footer">
      <a id="close" class="modal-close waves-effect waves-red btn-flat">Fechar</a>
      <span class="prep"></span>
    </div>

  </div>

    </div>
</div>
</div>
</div>
</div>
   </body>
 </html>
 <style type="text/css">
  
    .z-depth-2{
      width: 1230px;
      margin: 0 auto;
      border-radius: 10%;
      background-color: white;
  }
  #cadastro{
      width: 100%;
      margin: 0 auto;
      border-radius: 500px;
      background-color: white;
  }

  </style>