<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
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
  <form method="post">
	 <input type="text" name="rm" id="rm" placeholder="coloque seu rm">
	   <input type="password" name="senha" id="senha" placeholder="digite a sua senha">
	 <input type="button" name="enviar" id="enviar" value="enviar">

   

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
    
</body>
</html>