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
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="estiloddw6.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
	<title>Cadastro amd</title>
</head>
<body>
<div id="fundo">
  <br>
  <div  class="z-depth-2">
  <div id="cadastro">
  <div id="logoo">
         <center> <img id="legal" src="legal1.png"></center>
   </div>
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="cod" type="text" class="validate" name="cod" placeholder="Digite seu nome" >
          <label for="cod">Nome</label>
        </div>
     
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="senha" type="password" class="validate" name="senha" placeholder="Digite a sua senha">
          <label for="senha">Senha</label>
        </div>
          </div>
  </select>
  <br>
<center><button class="btn waves-effect waves-light indigo darken-3" type="button" name="enviar" id="enviar" value="cadastrar" >Cadastre-se</button></center>
<br>
    </form>
  </div>
</div>
</div>
</div>
  <?php

 include('../conexao.php');

  ?>

    <script type="text/javascript">
	
        	$(document).ready(function(){
  $("#enviar").click(function(){
    
     var dados = {'cod': $('#cod').val(), 'senha': $('#senha').val()};

     $.ajax({
      

      type: 'POST',
      url: '../Ajax/cadastro-adm-ajax.php',
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
      background-image: url("lega1.jpg");
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