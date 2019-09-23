<?php
	include('menu.php')
 ?>
<head>

	<title>Home</title>
</head>
<body>
<div class="w3-container">
 
</div>

<br><br><br><br><br><br><br><br><br><br>
</div>
     </div>

<center><img src="imagens/legal1.png" id="daora"></center>

<div id="balao">

            <div class="row">
            <div class="col s12 m7">
            <div class="card">
            <div class="card-image">
           <center> <img src="imagens/armario.png" id="armario"></center>
            </div>
            <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
            </div>
           <div class="card-action">
          <a href="#">This is a link</a>
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
           <center><img src="imagens/lapis.png" id="lapis"></center> 
            </div>
            <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
            </div>
           <div class="card-action">
          <a href="#">This is a link</a>
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
            <center><img src="imagens/user.png" id="user"></center>
            </div>
            <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
            </div>
           <div class="card-action">
          <a href="#">This is a link</a>
            </div>
            </div>
            </div> 
            </div>
  
</div>

<br><br><br>

<div id="lele">
<center><div class="w3-content" style="max-width:800px">
   <img class="mySlides" src="imagens/leao1.jpg" style="width:100%;display:none"></a>
   <img class="mySlides" src="imagens/leao2.jpg" style="width:100%"></a>
   <img class="mySlides" src="imagens/leao3.jpg" style="width:100%;display:none"></a>

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/leao1.jpg"  style="width:100%;cursor:pointer" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/leao2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="imagens/leao3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
       </div>
            </div>
                  </div>
                         </center>

</body>

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
<?php 
	include('footer.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

#texto{
  font-size: 20px;
  transition: 1s;
}

#texto:hover{
  color: blue;
  font-size: 30px;
}

#user{

  width:250px;
}

#lapis{
width: 200px;
margin-top: 22%;

}

#armario{
  
  width: 200px;
}

#balao{

  width: 700px;
}

#balao2{
  margin-top: -38%;
  margin-left: 450px;
  width: 700px;
}

#balao3{
  margin-left: 880px;
  width: 750px;
    margin-top: -33%;
    height: 500px;
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
#daora{
margin-top: -20%;
width: 30%;
transition: 1s;
}

#daora:hover
{
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
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