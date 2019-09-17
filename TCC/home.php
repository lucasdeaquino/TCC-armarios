<!DOCTYPE html>
<html>
<head>

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="estiloddw6.css" type="text/css">



	<title></title>
</head>
<body>



	<nav id="nav">
    <div class="nav-wrapper black">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a id="menu" href="badges.html">Comprar Armarios</a></li>
        <li><a id="menu" href="collapsible.html">Sobre</a></li>
        <li><a id="menu" href="mobile.html">FAQ</a></li>
           <li><a id="menu" href="sass.html">Contatos</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
     
     <center> <img id="daora" src="imagens/legal.png"></center> 
 </div>

<div class="campo">
   <a href="#"> <img src="imagens/armario.png" alt="Avatar" class="armario">
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


</a>

</body>

<div class="footer">
  <p>Footer</p>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
</html>
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


</style>