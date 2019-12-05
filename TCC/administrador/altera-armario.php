<!DOCTYPE html>
<html>
<head>
	
	<title>Alterar Armário</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="utf-8">
  <script type="text/javascript">
 $(document).ready(function(){
    $('select').formSelect();
  });
</script>
</head>
<body>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta http-equiv= "Content-Type" content= "text/html; charset=iso-8859-1" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estiloddw6.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<nav id="nav">
    <div class="nav-wrapper indigo darken-4">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
      </ul>
    </div>
    </nav>
<br><br><br>
		<?php

include('../conexao.php');
session_start();
$_SESSION['alter'] = $_POST['alterar'];
$alterar = $_SESSION['alter'];
  $select_armario = "SELECT tb_armario.cd_armario as 'cd', tb_armario.nm_armario as 'armario', tb_tipo_armario.ds_tipo as 'tipo', tb_status.ds_status as 'status' FROM tb_armario
   inner join tb_tipo_armario on (tb_tipo_armario.cd_tipo_armario = tb_armario.id_tipo_armario)
   inner join tb_status on (tb_status.cd_status = tb_armario.id_status) WHERE tb_armario.cd_armario = '$alterar'";
      $exe = $mysqli->query($select_armario);
        $row = $exe ->fetch_object();
 
 echo '<div id="cadastro"><div id="fundo"><br><div  class="z-depth-2"><div id="cadastro"><br><br><label>Número do armário:</label> <input type="text" name="armario" id="armario" ><br>';
?>
    
  <div class="input-field col s12">
    <select name="cadastrar" id="cadastrar" >
      <option value="" disabled selected>Escolher</option>
   
   
   
   <?php

     $select_tipo = "SELECT * FROM tb_tipo_armario";

      $exe = $mysqli->query($select_tipo);     
     
   
	       while($row = $exe->fetch_object()){

          echo "<option value = ".$row->cd_tipo_armario.">".$row->ds_tipo."</option>";

      }

?>

 </select>
    <label>Tamanho do armário</label>
  </div>

<div class="input-field col s12">
    <select name="status" id="status" class="status" >
      <option value="" disabled selected>Escolher</option>


   <?php

     $select_status = "SELECT * FROM tb_status";

      if(!$exe2 = $mysqli->query($select_status)){
     
         echo $mysqli->error;
      }
       else{

	      while($row2 = $exe2->fetch_object()){

       echo "<option value = ".$row2->cd_status.">".$row2->ds_status."</option></div</div></div></div>";
     }
  }

?>	

 </select>
    <label>Status do armário:</label>
  </div>
   


<center><button class="btn waves-effect waves-light indigo darken-3" type="button" name="enviar" id="enviar" value="cadastrar">Alterar</button></center><br><br>


    <script type="text/javascript">


	
        	$(document).ready(function(){

           $('#enviar').click(function(){
     
         var dados = {'armario': $('#armario').val(), 'cadastrar' : $('#cadastrar').val(), 'status': $('.status option:selected').val()};

      $.ajax({
      

       type: 'POST',
       url: '../Ajax/alterar-armario-ajax.php',
       data: dados, 

          success : function(response){
             
        alert(response);
      }

     });
  });
});
</script>

</body>
<style type="text/css">
  
    .z-depth-2{
      width: 700px;
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
  #menu{

transition: 0.5s;
}
#menu:hover{
 color:#6495ED;
}

#etec{
  margin-left: 740px;
  margin-top: -3%;
  width: 200px;
}


#daora{
margin-top:1%; 
width: 30%;
transition: 1s;
}

#daora:hover
{
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
}
</style>
</html>