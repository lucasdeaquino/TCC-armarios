
<html>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<head></head>
<meta charset="utf-8">
<body>


<?php
    include('menu.php');
    include('conexao.php');

?>



 <center><div id="balao1">

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


<div id="balao" class="container">
    <div class="row">
      <div class="col s4 m4">
        <div class="card">
          <div class="card-image">
          <center><i class="large material-icons">shopping_cart</i></center>
          </div>
          <div class="card-content">
            <center><h4>Comprar Armairos<h4></center>
                <p><center>Aqui você pode adquirir o seu armario de maneira facil e rapida</center></p>
                 <div class="card-action">
                <center><a href="aluno-armario.php">Comprar armario</a></center>
                 </div>

          </div>

        </div>
      </div>
      <div class="col s4 m4">
        <div class="card">
          <div class="card-image">
           <center><i class="large material-icons">create</i></center>
          </div>
          <div class="card-content">
             <center><h4>Editar Perfil<h4></center>
                  <p><center>Aqui você pode adquirir o seu armario de maneira facil e rapida</center></p>
                 <div class="card-action">
                 <center><a href="#">Editar Perfil</a></center>
                 </div>

          </div>
        </div>
      </div>
      <div class="col s4 m4">
        <div class="card">
          <div class="card-image">
            <center><i class="large material-icons">account_circle</i></center>

          </div>
          <div class="card-content">
           <center><h4>Consultar Perfil<h4></center>
                <p><center>Aqui você pode adquirir o seu armario de maneira facil e rapida</center></p>
                 <div class="card-action">
                <center> <a href="#">Consultar Perfil</a></center>
                 </div>

          </div>
        </div>
      </div>
   </div>
   </div>
   </div>
 </div>






<style type="text/css">
#balao1{
margin-top:0%;
  margin-left: 0%;
  width: 70%;
}

#balao{

width: 70%;

}

</style>
</body>

<?php
    include('footer.php')
?>

</html>

