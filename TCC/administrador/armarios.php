<!DOCTYPE html>
<html>
<head>
	<title>Armários</title>
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

  
  <div class="container">
     <script>  
          $(document).ready(function(){
            $('.visualizar').click(function(){
    $('.modal').modal();
  });
            $('.excluir').click(function(){
    $('.modal').modal();
  });
   //         $('.alterar').click(function(){
   // $('.modal').modal();
 // });
  });

</script>
<table  class="striped">
        <thead>
          <tr>
            
              <th>Número</th>
              <th>Tamanho</th>
              <th>Status</th>
              <th>Alterar/Visualizar/Deletar</th>
          </tr>
        </thead>
          <tbody>
 <?php
 session_start();
           if(empty($_SESSION['id_adm'])){
            header('location: ../login.php');

           }

include('../conexao.php');

  $sqlarmarios = "SELECT tb_armario.cd_armario as 'cd', tb_armario.nm_armario as 'armario', tb_tipo_armario.ds_tipo as 'tipo', tb_status.ds_status as 'status' FROM tb_armario
  inner join tb_tipo_armario on (tb_tipo_armario.cd_tipo_armario = tb_armario.id_tipo_armario)
  inner join tb_status on (tb_status.cd_status = tb_armario.id_status)";

  $exearmarios = $mysqli -> query($sqlarmarios);

 
 while($row = $exearmarios -> fetch_object()){

 	echo " <tr>
            <td>".$row ->armario."</td>
            <td>".$row ->tipo."</td>
            <td>".$row ->status."</td>
            <form method= 'post' action = 'altera-armario.php'>
            <td><button  class = 'btn btn-floating waves-effect blue darken-1 modal-trigger alterar' name = 'alterar' id = 'alterar' value= ".$row->cd." ><i class=' large material-icons'>mode_edit</i></button>
            </form>
            <button data-target='modal1' class = 'btn btn-floating waves-effect  teal darken-1 modal-trigger visualizar' name = 'visualizar' id = 'visualizar' value=".$row->cd." ><i class=' large material-icons'>remove_red_eye</i></button>
            <button data-target='modal1' class = ' btn-floating btn waves-effect   red darken-1 modal-trigger excluir' name = 'excluir' id = 'excluir' value=".$row->cd." ><i class=' large material-icons'>delete</i></button> </td>
          </tr>";

 }

   ?>



 <script>    
          $(document).ready(function(){

   //Alteração

   $('.alterar').click(function(){
 //   var text1 = 'Alterar';
 //             var sub = 'Modo de alteração.';
 //             $('.inf').text(text1);
 //             $('.sub').text(sub);
 //             $('.prep').empty();
 //             $('.mod').empty();



               
         
           });

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
      url: '../Ajax/visualizar-armario-ajax.php',
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

      var text = 'Você tem certeza que deseja excluir o armário?';
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
      url: '../Ajax/excluir-armario-ajax.php',
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
</body>
</html>