<!DOCTYPE html>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="Js/cadastro-functions.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
	<title>Cadastro Aluno</title>
</head>
<body>

      <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">Sobre</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </div>
  </nav>
<br>

    <div class="row">
    <form class="col s12" id="form">
      <div class="row">
        <div class="input-field col s6">
          <label for="nome">Nome completo</label>
          <input id="nome" type="text" name="nome">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="senha">Senha:</label>
          <input id="senha" type="password" name="senha">      
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="rm">RM:</label>
          <input id="rm" type="text" id="RM">
        </div>
        </div>
     <div class="row">
        <div class="input-field col s12">
          <label for="email">Email:</label>
          <input id="email" type="email" name="email">
        </div>
      </div>
         <div class="row">
        <div class="input-field col s12">
          <label for="telefone">Telefone:</label>
          <input id="telefone" type="text" class="telefone">
        </div>
      </div>
  <label for="turma">Selecione sua turma:</label>
  <select class="browser-default">
    <option value="" disabled selected>Escolha a sua turma</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>
<br>
<center><button class="btn waves-effect waves-light" type="button" name="enviar" id="enviar" value="cadastrar">Cadastar</button></center>
  </div>
    </form>
</div>
<?php

 include('conexao.php');

  $consultarsala = "SELECT * from tb_turmas";
      if(!$exesala = $mysqli -> query($consultarsala)){
     	echo $myslqi -> error;
         }
   

     else{

     	while($rowsala = $exesala ->fetch_object()){
              
              echo "<option value = '$rowsala->cd_turmas'>$rowsala->nm_turmas</option>";
     	}
     }

?>


</select>

    <script type="text/javascript">
	
// Mascarando o campo Telefone

jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });



    </script>


    <script type="text/javascript">
	
        	$(document).ready(function(){
  $("#enviar").click(function(){
    
     var dados = {'rm': $('#rm').val(), 'senha': $('#senha').val(), 'turma': $('#turma').val(), 'nome': $('#nome').val(), 'email': $('#email').val(), 'telefone': $('#telefone').val()};

     $.ajax({
      

      type: 'POST',
      url: 'Ajax/cadastro-aluno-ajax.php',
      data: dados, 

      success : function(response){
             
        alert(response);
      }

     });
  });
});


</script>

 
</body>
</html>
<style type="text/css">
  
  body{
    background-color:#f5f5f5;
  }
</style>