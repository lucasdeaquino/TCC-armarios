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
            
	<title>Login</title>
</head>
<body>



  <div id="fundo">
  <br>
  <div  class="z-depth-2">
  <div id="cadastro">
  <div id="logoo">
         <center> <img id="legal" src="imagens/legal1.png"></center>
   </div>
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="rm" type="text" class="validate">
          <label for="first_name">RM</label>
        </div>
     
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="senha" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
         <div id="letra">
      </div>
          </div>
           <div id="cadastro1"><a href="cadastro.php" >Cadastre-se</a></div>
  </select>
  <br>
 
<center><button class="btn waves-effect waves-light indigo darken-3" type="button" name="enviar" id="enviar" value="cadastrar">Enviar</button></center>
<br>
    </form>
  </div>
</div>
</div>
</div>




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
      url: 'Ajax/login-ajax.php',
      data: dados, 
      success : function(response){
             
           if(response.trim() == "location.href = 'inicial.php';" ){
             eval(response);
          }

                else if(response.trim() == "location.href = 'administrador/adm-inicial.php';" ){
             eval(response);
          }

            else{

              $('#rm').css('border-color', 'red');
             $('#senha').css('border-color', 'red');
             alert(response);



       }
      }
     });
  });
});
</script>

 
</body>
</html>
<style type="text/css">
/* label focus color */
 .input-field input:focus + label {
   color: blue !important;
 }
 /* label underline focus color */
 .row .input-field input:focus {
   border-bottom: 1px solid blue !important;
   box-shadow: 0 1px 0 0 blue !important
 }

body{
 background-image: radial-gradient(circle, #E0EEEE, #C1CDCD,#838B8B);
}
  
  #legal{
      height:150%;
      width:100%; 
  }
  #fundo{
      background-image: url("issoai.jpg");
      background-repeat: no-repeat; 
}
  #cadastro{
      width: 400px;
      margin: 0 auto;
      border-color: blue;
      border-radius: 100px;
      background-color: white;
  }
  .z-depth-2{
      width: 700px;
      margin: 0 auto;
      border-radius: 10%;
      background-color: white;
  }
</style>