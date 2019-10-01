</!DOCTYPE html>
<html>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<head></head>

<body>


<?php
    include('menu.php')
?>

<center><img src="imagens/legal1.png" id="daora"></center>




 <center><div id="balao">

            <div class="row">
            <div class="col s12 m7">
            <div class="card">
            <div class="card-image">  
            </div>
            <span class="card-title">Bem Vindos</span>
            <div class="card-content">
            <p>Este e o ETEC LOCKER, o sitema no qual voce podera adiquirir seu novo armario, alem de poder editar a reserva e relatar caso tenham problemas.</p>
            </div>
            </div>
            </div> 
            </div>
  
</div>

</center>


<div id="balao1">

            <div class="row">
            <div class="col s12 m7">
            <div class="card">
            <div class="card-image">
          <center><i class="Large material-icons" >shopping_cart</i></center> 
            </div>
            <div class="card-content">
            <p>Caso voce nao tenha um armario, adiquira agora para seu maior conforto na escola.</p>
            </div>
           <div class="card-action">
          <a href="aluno-armario.php">Comprar Armario</a>
            </div>
            </div>
            </div> 
            </div>
  
</div>


<div id="balao2">

            <div class="row">
            <div class="col s12 m7">
            <div class="card">
            <div class="card-image">
          <center><i class="Large material-icons" >create</i></center> 
            </div>
            <div class="card-content">
            <p>Aqui voce pode editar dados do seu perfil caso voce ache necessario.</p>
            </div>
           <div class="card-action">
          <a href="aluno-armario.php">Editar Perfil</a>
            </div>
            </div>
            </div> 
            </div>
  
</div>



<div id="balao3">

            <div class="row">
            <div class="col s12 m7">
            <div class="card">
            <div class="card-image">
          <center><i class="Large material-icons" >account_box</i></center> 
            </div>
            <div class="card-content">
            <p>Veja seu perfil e caso nescessite alterar algo, clique na pagina alterar perfil.</p>
            </div>
           <div class="card-action">
          <a href="aluno-armario.php">Consultar Perfil</a>
            </div>
            </div>
            </div> 
            </div>
  
</div>


<?php
    include('footer-adm.php')
?>



<style type="text/css">

#balao1{
margin-top:-22%;
  margin-left: 0%;
  width: 750px;
}

#balao2{
margin-top: -22%; 
  margin-left: 35%;
  width: 750px;
}

#balao3{
  margin-top: -22%;
  margin-left: 71%;
  width: 750px;
}

#balao{
  margin-top: -2%;
  margin-right: -70%;
}

#daora{
margin-top:-3%; 
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




</body>
</html>