<!DOCTYPE html>
<html>
<head>
	<title>Comprar Armários</title>
<meta charset="utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 </head>
<body>
<div class="meta">
	<?php
  session_start();

  if(empty($_SESSION['id_aluno'])){
   header('location: login.php');
  }
    include('conexao.php');
   
  		  	$select_armarios = "SELECT tb_armario.nm_armario as 'armario', tb_tipo_armario.ds_tipo as 'tipo', tb_status.ds_status as 'status', tb_armario.cd_armario as 'id' from tb_armario
  		  	inner join tb_tipo_armario on (tb_tipo_armario.cd_tipo_armario = tb_armario.id_tipo_armario)
  		  	inner join tb_status on (tb_status.cd_status = tb_armario.id_status)";

  		  	$exe_armarios = $mysqli -> query($select_armarios);
   
   		   while($row = $exe_armarios -> fetch_object()){

   		   	echo $row ->armario." ".$row ->tipo." ".$row ->status." <button name = 'compra' id= 'compra' value = ".$row->id.">Comprar</button><br>";

   		   }

	?>
  </div>

  <select name="status" id="selecionar">
    <option>Selecionar</option>
   <?php
  
      $escolher_status = "SELECT * FROM tb_status";
        $exe_status = $mysqli-> query($escolher_status);
        while($row_status= $exe_status -> fetch_object()){
         
          echo "<option value =".$row_status->cd_status.">".$row_status ->ds_status."</option>";

        }

   ?> 



  </select>







<script type="text/javascript">
   $(document).ready(function(){
    $("#selecionar").click(function(){
    

    
   
var selection = $("#selecionar option:selected");

if(selection.val() == 1){

  $(".meta").empty();
  selection = 0;


}

else if(selection.val() == 2){

  $(".meta").empty();
  selection = 0;

}
  
  else if(selection.val() == 3){

  $(".meta").empty();
  selection = 0;
  

}

if(selection == 0){



 var dados = {'op': $("#selecionar option:selected").val()};
      $.ajax({
      
    
      type: 'POST',
      url: 'Ajax/aluno-armario-ajax.php',
      data: dados, 

      success : function(response){
            
         
             
       eval($(".meta").text(response));

       
      }
    
        });

        }
     });

     $("#compra").click(function(){

       var armario = {'id': $("#compra").val()};
      $.ajax({
      
    
      type: 'POST',
      url: 'Ajax/compra-armario-ajax.php',
      data: armario, 

      success : function(response){
            
         
             
       eval($(".meta").text(response));

       
      }
    
        });
     
    });     
  });
   
  
   </script>

</body>
</html>