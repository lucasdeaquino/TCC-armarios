</!DOCTYPE html>
<html>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta charset="utf-8">
<head></head>

<body>


<?php
    include('menu-adm.php')
?>

<center><img src="imagens/legal1.png" id="daora"></center>




<center>
<div id="balao">
<div class="col s12 m6">
<div class="card blue-grey darken-1">
<div class="card-content white-text">
<span class="card-title">Adimnistrador</span>
<p>Olá Admisitrador, esta e a área feita pra você! aqui voce poderá organizar <br>e gerenciar o sistema de compra venda e reserva de armarios com práticidade e de forma rapida e segura ! .</p>
</div>
<div class="card-action">
</div>
</div>
</div>
</div>
</center>



<div id="balao1">
<div class="col s12 m6">
<div class="card blue-grey darken-1">
<div class="card-content white-text">
<span class="card-title">Reservas</span>
<p>Veja as reservas de ármarios feitas pelos alunos e avilie se vai ser aprovada ou não.</p>
</div>
<div class="card-action">
<a href="#">Ver Reservas</a>
</div>
</div>
</div>
</div>




<div id="balao2">
<div class="col s12 m6">
<div class="card blue-grey darken-1">
<div class="card-content white-text">
<span class="card-title">Armarios</span>
<p>Aqui voce pode ver a localização de cada ármario da Etec.</p>
</div>
<div class="card-action">
<a href="#">Ver Armarios</a>
</div>
</div>
</div>
</div>
  




<div id="balao3">
<div class="col s12 m6">
<div class="card blue-grey darken-1">
<div class="card-content white-text">
<span class="card-title">Cadastrar Adminstador</span>
<p>Cadastre um novo administrador de sua conficança para gerenciar o sistema também.</p>
</div>
<div class="card-action">
<a href="#">Cadastrar Administrador</a>
</div>
</div>
</div>
</div>




<div id="balao4">
<div class="col s12 m6">
<div class="card blue-grey darken-1">
<div class="card-content white-text">
<span class="card-title">Lista de Alunos</span>
<p>Aqui você pode conferir a lista de alunos da escola para ter um controle de maior qualidade.</p>
</div>
<div class="card-action">
<a href="#">Ir para a lista</a>
</div>
</div>
</div>
</div>
</div>
  



<?php
    include('footer-adm.php')
?>



<style type="text/css">

#balao{
  margin-left: 3%;
  width: 94%
}


#balao1{
 margin-top: 4%;
 width: 30%;
 margin-left: 18%;
}

#balao2{
  margin-top: -13.5%;
  margin-left: 50%;
  width: 30%;
}


#balao3{
  margin-top: 4.5%;
  width: 30%;
  margin-left: 18%;
}

#balao4{
margin-top: -13.5%;
width: 30%;
margin-left: 50%;
}


#daora{
margin-top:-5%; 
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