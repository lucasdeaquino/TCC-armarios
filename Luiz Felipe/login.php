<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body>
   <?php 
     session_start();
     include('conexao.php');
      ?>
      <nav>
  <div id="contorno"> <div id="daora"> <center> <div id="legal"> <img src="imagens/legal1.png" width="80%" ></center></div>
  <form method="post">
	<div id="l"> <input type="text" name="rm" id="rm" placeholder="Coloque seu rm"><br><br>
	   <input type="password" name="senha" id="senha" placeholder="Digite a sua senha"></div><br><br>
	 <input type="button" name="enviar" id="enviar" value="enviar" class="botao1">
  <div id="top"><a href="cadastro.php" id="le">Cadastre-se</a></div></div> </div> 
   
   

	  <script type="text/javascript">


	
        	$(document).ready(function(){
  $("#enviar").click(function(){
    
     var dados = {'rm': $('#rm').val(), 'senha': $('#senha').val()};
     $.ajax({
      
      type: 'POST',
      url: 'Ajax/login-ajax.php',
      data: dados, 
      success : function(response){
             
             if(response.trim() == "location.href = 'inicial.php';" ){
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
	
  </form>
</nav>
    
</body>
</html>

<style type="text/css">

#enviar{

margin-left: 40%;

}

#contorno{
  margin-right: 10%;
  height: 100%;
  border-radius: 40px 40px 40px 40px ;
  background-color: white; 


}

#le{

color:black;

}

body{
 background-image: linear-gradient( to right, #1E90FF ,#00BFFF, #87CEEB, #87CEFA );
}
nav{
  margin-top:12%;
  margin-left:32%;
  width:40%; 
  height:400px;
  padding-left: 5%;
  font-family: 'Montserrat', sans-serif;

}


.botao1{

color: black;
padding: 5px 10px;
text-align: center;
font-family: 'Montserrat', sans-serif;
display: inline-block;
font-size: 16px;
border-radius: 30%;
margin-left: 31%;

}

#l{
margin-top: -25%;
margin-left: 27%;

}

#top{
margin-left: 38%;
margin-top: -16%;
}

</style>