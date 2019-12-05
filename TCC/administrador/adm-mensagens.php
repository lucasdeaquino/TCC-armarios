<?php
include('../conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mensagens</title>
</head>
<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>
  <?php
    include('menu-adm.php');
?>
<div id="cadastro"><div id="fundo"><br><div  class="z-depth-2"><div id="cadastro"><br><br>
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
              <th>Mensagem</th>
              <th>Data</th>
              <th>Hora</th>
              <th>Opções</th>
          </tr>
        </thead>
          <tbody>

	<?php
  
  $select = "SELECT * FROM tb_duvidas 
             INNER JOIN tb_aluno on (tb_aluno.cd_rm = tb_duvidas.id_aluno_duvidas)";

             $exe = $mysqli->query($select);
             
               while($row = $exe->fetch_object()){

                 echo  " <tr>
            <td>".$row ->cd_rm."</td>
            <td>".$row ->nm_aluno."</td>
            <td>".$row ->ds_email."</td>
            <td>".$row ->ds_duvidas."</td>
            <td>".$row ->dt_duvidas."</td>
            <td>".$row ->hr_duvidas."</td>
            <td><button class = 'btn waves-effect blue darken-1' name = 'alterar' id = 'alterar' value= ".$row->cd_rm." >Responder</button>
            </form>
            <button data-target='modal1' class = 'btn waves-effect  teal darken-1 modal-trigger visualizar' name = 'visualizar' id = 'visualizar' value=".$row->cd_rm." >visualizar</button>
            <button data-target='modal1' class = 'btn waves-effect   red darken-1 modal-trigger excluir' name = 'excluir' id = 'excluir' value=".$row->cd_rm." ><i class='material-icons'>delete</i>Excluir</button> </td>
          </tr>";


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
      url: '../Ajax/visualizar-mensagem-ajax.php',
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

      var text = 'Você tem certeza que deseja excluir a Mensagem?';
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
</body>
</html>
<style type="text/css">
  
    .z-depth-2{
      width: 950px;
      margin: 0 auto;
      border-radius: 10%;
      background-color: white;
  }
  #cadastro{
      width: 80%;
      margin: 0 auto;
      border-radius: 500px;
      background-color: white;
  }

  </style>
