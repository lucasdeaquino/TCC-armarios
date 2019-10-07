
<html>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<head></head>
<meta charset="utf-8">
<body>


<?php
    include('menu.php');
    include('conexao.php');
?>



 <center><div id="balao">

            <div class="row">
            <div class="col s12 m7">
            <div class="card">
            <div class="card-image">  
            </div>
            <span class="card-title">Bem Vindo 
<?php session_start();
echo $_SESSION['nm_aluno']; ?> 

</span>
            <div class="card-content">
            <p>Este é o Etec Locker, o sistema de locação e gerenciamento de armários da Etec de Itanhaém, aqui voce pode adquirir seu armário de forma rápida, fácil e prática.</p>
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
            <p>Caso você não tenha um armário, adquira agora o seu para um maior conforto na
 escola.</p>
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
            <p>Aqui você pode editar os dados do seu perfil caso ache nescessário.</p>
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
          <center><i class="Large material-icons" >account_circle</i></center> 
            </div>
            <div class="card-content">
            <p>Consulte o seu perfil para saber se algo precisa ser editado.</p>
            </div>
           <div class="card-action">
          <a href="aluno-armario.php">Consultar Perfil</a>
            </div>
            </div>
            </div> 
            </div>
  
</div>

<br><br><br><br>
<?php
    include('footer.php')
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
    
  margin-right: -70%;
}
</style>
</body>
</html>

