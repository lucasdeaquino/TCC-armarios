<!DOCTYPE html>
<html>
<head>

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="estiloddw6.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title></title>
</head>
<body>
	<nav id="nav">
    <div class="nav-wrapper indigo darken-4">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a id="menu" href="badges.html">Comprar Armarios</a></li>
        <li><a id="menu" href="collapsible.html">Sobre</a></li>
        <li><a id="menu" href="mobile.html">FAQ</a></li>
           <li><a id="menu" href="sass.html">Contatos</a></li>
      </ul>
    </div>
  </nav>


     <center> <img id="daora" src="imagens/legal1.png"></center> 

<div class="w3-container">
 
</div>
<div id="lele">
<center><div class="w3-content" style="max-width:1200px">
   <img class="mySlides" src="imagens/dog.jpg" style="width:100%;display:none"></a>
   <img class="mySlides" src="imagens/dog1.png" style="width:100%"></a>
   <img class="mySlides" src="imagens/dog2.png" style="width:100%;display:none"></a>

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/dog.jpg"  style="width:100%;cursor:pointer" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/dog1.png" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/dog2.png" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
    </div>
  </div>
</div>
</center>
<br><br><br><br><br><br><br><br><br><br>
</div>
 </div>
 <div id="borda">
<div class="campo">
    <img src="imagens/armario.png" alt="Avatar" class="armario">
  <div class="barra">
    <div class="text">Comprar Armarios</div>
  </div>
</div>
</a>
<div class="campo2">
    <a href="#"><img src="imagens/lapis.png" alt="Avatar" class="lapis">
  <div class="barra2">
    <div class="text">Editar Perfil</div>
  </div>
</div>
</a>
<div class="campo3">
  <a href="#">  <img src="imagens/user.png" alt="Avatar" class="user">
  <div class="barra3">
    <div class="text">Ver Conta</div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
</body>
<footer class="page-footer indigo darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer </h5>
                <p class="grey-text text-lighten-4">dai a gente ve o que vai escrever aki.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">sei la</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">alguma coisa</a></li>

              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">outra coisa</a>
            </div>
          </div>
        </footer>
<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
#menu{
transition: 0.5s;
}
#menu:hover{
 color:#6495ED;
}
.campo {
  position: relative;
  width: 20%;
  height: 30%;
  margin-left: 10%;


}
.armario{
  border-radius: 40px 40px 40px 40px;
  display: block;
  width: 70%;
  height: auto;
  transition: 0.5s;
}
.barra {
 border-radius: 10px 10px 10px 10px;
  position: absolute;
  top: 0;
  bottom: 0;
  height: 100%;
  width: 70%;
  opacity: 0;
  transition: .5s ease;
background: -webkit-gradient(linear, left top, left bottom, from(#CCCCCC), to(#000000));
            background: -moz-linear-gradient(top, #6495ED, #4169E1);
           
}
.campo:hover .barra {
  opacity: 1;
}
.campo2{

  position: relative;
  width: 17%;
  height: 27%;
  margin-left: 42%;
  margin-top: -13%;
}
.lapis{
  border-radius: 40px 40px 40px 40px;
  display: block;
  width: 70%;
  height: auto;
  transition: 0.5s;
}
.barra2{
  border-radius: 10px 10px 10px 10px;
  position: absolute;
  top: 0;
  bottom: 0;
  height: 100%;
  width: 70%;
  opacity: 0;
  transition: .5s ease;
background: -webkit-gradient(linear, left top, left bottom, from(#CCCCCC), to(#000000));
            background: -
}
.campo2:hover .barra2{
  opacity: 1;
}
.campo3{
  position: relative;
  width: 18%;
  height: 28%;
  margin-left: 75%;
  margin-top: -12%;
}
.user{
  border-radius: 40px 40px 40px 40px;
  display: block;
  width: 70%;
  height: auto;
  transition: 0.5s;
}
.barra3{
  border-radius: 10px 10px 10px 10px;
  position: absolute;
  top: 0;
  bottom: 0;
  height: 100%;
  width: 70%;
  opacity: 0;
  transition: .5s ease;
background: -webkit-gradient(linear, left top, left bottom, from(#CCCCCC), to(#000000));
            background: -
}
.campo3:hover .barra3{
  opacity: 1;
}
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  font-family: Andale Mono, monospace;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
#daora{
margin-top: -5%
   
}


  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }



</style>