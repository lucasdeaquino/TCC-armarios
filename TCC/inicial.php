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
            <meta charset="utf-8">
	<title>Home aluno</title>
</head>
<body>

	<?php
session_start();
include('conexao.php');

if(empty($_SESSION['id_aluno'])){

header('location: login.php');
}

 ?>


	 <nav>
    <div class="nav-wrapper indigo darken-3">
      <a href="#" class="brand-logo center"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="Home.html">Home</a></li>
        <li><a href="Sobre.html">Sobre</a></li>
        <li><a href="Contato.html">Contato</a></li>
        <li><a href="FAQ.html">FAQ</a></li>
        <li><a href="aluno-armario.php">RESERVAR ARMÁRIO</a></li>
      </ul>
    </div>
  </nav>
  <center>
  <div class="w3-content w3-section" style="width:400px ">
  <img class="mySlides"  src="imagens/legal1.png" style="width:100%">
 
</div>
</center>
 <footer class="page-footer indigo darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Etec Locker</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
      
            <a class="grey-text text-lighten-4 right" href="#!">Nova Conta</a>
            </div>
          </div>
        </footer>
<script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<style type="text/css">
  
body{
 background-image: radial-gradient(circle, #E0EEEE, #C1CDCD,#838B8B);
}
</style>
</body>
</html> 

