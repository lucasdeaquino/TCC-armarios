<!DOCTYPE html>

<head>
<title>Comer Natural - Restaurante Vegetariano</title>
</head>

<!-- BOOTSTRAP -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="estiloddw5.css" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--CABEÇALHO -->
<div class="container-fluid">

<div class="row">


       <div class="images">

              <div class="menu">

                 <div class="col-sm-2"><a href="index.php"><img src="imgddw/LOGO.fw.png" id="logo-menu" /></a></div>
            
            <div class="col-sm-9">
              <ul>

              	<a href="index.php"><li>Home</li></a>
              	<a href="index.php?id=2"><li>Cardápio</li></a>
              	<a href="index.php?id=7"><li>Quem Somos</li></a>
              	<a href="index.php?id=8"><li>Feedback</li></a>
             	<a href="index.php?id=9"><li>Contato</li></a>
               	<a href="index.php?id=10"><li>Endereço</li></a>
               
              </ul>
            </div>
          </div>

            <img src="imgddw/fundo2.jpg" id="fundo" style="height: 600px;" />
            <img src="imgddw/LOGO.fw.png" id="logo" style="margin-top: -45%;" />
               	
    </div>
  </div>

  <div class="body" style="margin-top: -20%;">          
<div class="row">
<div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
</div>
<?php
if(isset($_GET['id'])){
if($_GET['id'] == 2){

echo ' <div class="row">
<div class="col-sm-12">
<center><h1><b>Cardápio</b></h1></center><br>
<div class="menu" style="height:30px;">
<ul>
<a href="index.php?id=3"><li>Bebidas</li></a>
<a href="index.php?id=4"><li>Sobremesas</li></a>
<a href="index.php?id=5"><li>Porções</li></a>
<a href="index.php?id=6"><li>Pratos</li></a>
</ul>
</div>
 </div>



  <div class="col-sm-3">
  <br><br><br>
 <a href="#"><img src="imgddw/prato1.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/prato2.jpeg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/prato3.jpeg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/prato4.jpeg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/sobre1.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/sobre2.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/sobre3.png"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/sobre4.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/por1.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/por2.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
 <a href="#"> <img src="imgddw/por3.jpg"  id="homeimage"/></a>
 </div>

 <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/por4.jpg"  id="homeimage"/></a>
 </div>

  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/beb1.jpg"  id="homeimage"/></a>
 </div>

  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/beb2.jpg"  id="homeimage"/></a>
 </div>

  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/beb3.jpg"  id="homeimage"/></a>
 </div>

  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/beb4.jpg"  id="homeimage"/></a>
 </div>

</div>

</div>
<br><br>
<div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br><br>';

}

else if($_GET['id'] == 3){
echo ' <div class="row">
<div class="col-sm-12">
<center><h1><b>Bebidas</b></h1></center><br>
<div class="menu" style="height:30px;">
<ul>
<a href="index.php?id=3"><li>Bebidas</li></a>
<a href="index.php?id=4"><li>Sobremesas</li></a>
<a href="index.php?id=5"><li>Porções</li></a>
<a href="index.php?id=6"><li>Pratos</li></a>
</ul>
</div>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/beb1.jpg"  id="homeimage"/></a>
 </div>

  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/beb2.jpg"  id="homeimage"/></a>
 </div>

  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/beb3.jpg"  id="homeimage"/></a>
 </div>

  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/beb4.jpg"  id="homeimage"/></a>
 </div>


 </div>
 <div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br><br>';


}


else if($_GET['id'] == 4){
echo ' <div class="row">
<div class="col-sm-12">
<center><h1><b>Bebidas</b></h1></center><br>
<div class="menu" style="height:30px;">
<ul>
<a href="index.php?id=3"><li>Bebidas</li></a>
<a href="index.php?id=4"><li>Sobremesas</li></a>
<a href="index.php?id=5"><li>Porções</li></a>
<a href="index.php?id=6"><li>Pratos</li></a>
</ul>
</div>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/sobre1.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/sobre2.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/sobre3.png"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/sobre4.jpg"  id="homeimage"/></a>
 </div>

 </div>
 <div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br><br>';


}

else if($_GET['id'] == 5){
echo ' <div class="row">
<div class="col-sm-12">
<center><h1><b>Bebidas</b></h1></center><br>
<div class="menu" style="height:30px;">
<ul>
<a href="index.php?id=3"><li>Bebidas</li></a>
<a href="index.php?id=4"><li>Sobremesas</li></a>
<a href="index.php?id=5"><li>Porções</li></a>
<a href="index.php?id=6"><li>Pratos</li></a>
</ul>
</div>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/por1.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/por2.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
 <a href="#"> <img src="imgddw/por3.jpg"  id="homeimage"/></a>
 </div>

 <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/por4.jpg"  id="homeimage"/></a>
 </div>


 </div>
 <div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br><br>';


}

else if($_GET['id'] == 6){
echo ' <div class="row">
<div class="col-sm-12">
<center><h1><b>Bebidas</b></h1></center><br>
<div class="menu" style="height:30px;">
<ul>
<a href="index.php?id=3"><li>Bebidas</li></a>
<a href="index.php?id=4"><li>Sobremesas</li></a>
<a href="index.php?id=5"><li>Porções</li></a>
<a href="index.php?id=6"><li>Pratos</li></a>
</ul>
</div>
 </div>
   <div class="col-sm-3">
  <br><br><br>
 <a href="#"><img src="imgddw/prato1.jpg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/prato2.jpeg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/prato3.jpeg"  id="homeimage"/></a>
 </div>
  <div class="col-sm-3">
  <br><br><br>
  <a href="#"><img src="imgddw/prato4.jpeg"  id="homeimage"/></a>
 </div>


 </div>
 <div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br><br>';




}


elseif ($_GET['id'] ==7 ) {
 
 echo'<div class="row">
 <div class="col-sm-12">

 <center><h1><b>Quem Somos</b></h1></center>
 <br><br>
 <img src="imgddw/quemsomos.jpg" id="pg7" />
 <br><br>
 Nascido em Outubro de 1969, em Santos, São Paulo, terra hospitaleira e de longas tradições beirãs, o Chefe Lucas de Aquino Assunção dedicou a sua juventude à agricultura e aos estudos, ingressando, posteriormente, num percurso na área da hotelaria.

Após uma passagem pela Escola de Hotelaria de Faro, onde estudou a arte de bem servir à mesa, Lucas começou a trabalhar, em 1989, no Hotel da Balieira, em Sagres, como ajudante de chef de turno.

Viajou, posteriormente, para Genebra, Suíça, onde se juntou a um grupo de profissionais de restaurantes de grande nome, como o Restaurante Roberto, o Federal, o Liryque e o Fénice . Em 1988, regressou às origens, estando de volta a Portugal.

Em conjunto com a esposa, Isabel Machado, uma experiente e zelosa profissional de cozinha, e com os seus filhos, Jorge e Davide Machado, traçaram o perfil do que seria o início de uma atividade hoteleira diferente, com raízes tradicionais, e onde o artesanato fosse a fórmula estabelecida para dotar o interior do restaurante preconizado. 

O resultado é este belo espaço, o que podemos chamar de um restaurante da Terra, da nossa Terra, repleto de sabores tradicionais, com os melhores produtos nacionais.
 </div>
 </div>
 <br><br>
  <div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
 <br><br><br>';
}


elseif ($_GET['id'] == 8) {
 
echo '<form method="post">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<center><h1><b>Feedback</b></h1></center>
<br><br><br>
<h4>Deixe a sua sugestão ou crítica ao nosso site para que nós possamos melhorar a qualidade do site.</h4>
    <br><br>
    Nome:<c>*</c> <input type = "text" name="nome" class="form-control" required>
    E-mail:<c>*</c> <input type = "email" name="email" class="form-control" required>
    Assunto:<c>*</c> <input type = "text" name="assunto" class="form-control" required>
    Página ou URL: <c>*</c><input type = "text" name="pagina" class="form-control" required><br>
    <center>Comentário:<c>*</c></center>
    <textarea name="comentario" cols="93" rows="10"></textarea>
    <br><br>

  <center><input type="submit" name="finalizar" value="Enviar" class="btn btn-warning btn-lg"></center>
   </div>
  </div>
  <br><br>
<div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
 <br><br><br></form>';


if(isset($_POST['nome'])){

  echo '<script>
  alert ("Comentário enviado com sucesso! Obrigado!");
  </script>';
 }
}


else if($_GET['id'] == 9){

echo'<form method="post">
<div class="row">
<center><h1><b>Contato</b></h1></center>
<br><br>
<div class="col-sm-1">
    <img src="imgddw/tel.png" id="social2" />
</div>

<div class="col-sm-2"><h4 style="margin-left:-25%;">+55 (11) 666333-6663</h4></div>

<div class="col-sm-1"></div>
<div class="col-sm-1">
    <img src="imgddw/mail.png" id="social2"  style="margin-left: -100%; margin-top: 0;" />
</div>
<div class="col-sm-2"><h4 style="margin-left:-71%; margin-top: 5%;">comernaturalcontato@gmail.com</h4></div>
<div class="col-sm-1">
    <img src="imgddw/local.png" id="social2" />
</div>
<div class="col-sm-4"><h4 style="margin-left:-13%;">Rua José Andarilho Dias N° 321 (São Paulo)</h4></div>
</div>
<br>
<h1><b>Fale com a Ouvidoria</b></h1>
<h4>A Ouvidoria Comer Natural tem como missão representar os interesses dos assinantes e leitores de seus produtos. Se sua dúvida ou reclamação foi tratada em nossos canais de atendimento, mas a solução apresentada não foi satisfatória, a questão poderá ser reexaminada pela Ouvidoria. Para isso, envie e-mail para ouvidoria@comernatural.com.br e informe o número do protocolo de seu atendimento anterior.</h4>
<br><br>
<h3>Quer ficar por dentro das novidades? Cadastre o seu E-mail e saiba quando irá ocorrer eventos e promoções no estabelecimento.</h3>
<br><br>
<div class="col-sm-4"></div>
<div class="col-sm-4"><input type="email" name="email" class="form-control"></div>
<br>
<input type="submit" class="btn btn-lg btn-warning" style="margin-top:-2%;">
<br><br>
<div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div><br><br><br>
</form>';

if(isset($_POST['email'])){

  echo '<script>
  alert ("Cadastrado com sucesso!");
  </script>';
 }
}
else if($_GET['id'] == 10){


echo '<div class="row">
<div class="col-sm-12">
<center><h1><b>Endereço</b></h1></center>
<br><br><br>
<img src="imgddw/localization.jpg" id="pagina" />
<br><br>
<h2>NOTA: o estabelecimento fica localizado na Rua José Andarilho Dias N° 321 (São Paulo).</h2>
</div>
</div>
<br><br>
<div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br><br>';
  }
}

else{
echo '
<div class="row">
<div class="col-sm-12">
      <center><h1><b>Experimente os melhores Pratos Vegetarianos do Brasil</b></h1></center>
      <br><br>
      <div class="borda">         
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="imgddw/destaque2.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>O melhor Restaurante Vegetariano do Brasil</h3>
          <p>Com os melhores preços</p>
        </div>
      </div>

      <div class="item">
        <img src="imgddw/slide2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>As melhores refeições</h3>
          <p>Com a melhor qualidade</p>
        </div>
      </div>
    
      <div class="item">
        <img src="imgddw/slide3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Os melhores cozinheiros</h3>
          <p>Preparando os melhores pratos Vegetarianos de São Paulo</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <br><br>

  <div class="row">
  <div class="col-sm-12">

    <center><img src="imgddw/epoca.jpg" id="epoca" /></center>

  </div>
</div>

<h4>O nosso Restaurante abrange as mais famosas "Trufas Brancas" em pratos exclusivos do restaurante. As trufas brancas são incríveis e fascinantes, principalmente pelo seu processo de criação, aquele que não existe. Elas estão no topo da lista dos ingredientes mais caros do mundo, e por isso apenas uma pequena parcela da população possui acesso. O preço do seu quilo pode chegar até 3.000 euros.</h4>
 
    </div>
  </div>
  <div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br>
<div class="row">
  <center><h2><b>Produtos em destaque</b></h2></center>
  <br><br>
  <div class="col-sm-3">

<img src="imgddw/homeimage.jpg" id="homeimage" />

  </div>
    <div class="col-sm-3">

<img src="imgddw/ali1.jpg" id="homeimage" />

  </div>
    <div class="col-sm-3">

<img src="imgddw/panqueca.jpg" id="homeimage" />

  </div>
    <div class="col-sm-3">

<img src="imgddw/ali3.jpg" id="homeimage" />

  </div>
</div>
<br>
<div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br>
<div class="row">

<center><h1><b>Nossa Equipe</b></h1></center>
<br><br>
<div class="col-sm-4">
<center><b>Chefe Adam</b></center>
<br>
<img src="imgddw/cozinheiro1.jpg" id="cozinheiro" />
<br><br> 

Agradecemos ao nosso chefe Adam que está a mais de 8 anos trabalhando pelo restaurante, graças ao Adam, podemos continuar servindo os clientes com as melhores refeições sem a perda de qualidade da comida.
  </div>

  <div class="col-sm-4">
<center><b>Chefe Amanda</b></center>
<br>

<img src="imgddw/cozinheiro2.jpg" id="cozinheiro" />
<br><br>

Agradecemos a nossa chefe Amanda que está a mais de 12 anos trabalhando pelo restaurante, com toda sua dedicação e responsabilidade não só para garantir a qualidade as melhores refeições, mas também para inovar na área da cozinha.

  </div>

  <div class="col-sm-4">
<center><b>Chefe Filippo</b></center>
<br>
<img src="imgddw/cozinheiro3.jpg" id="cozinheiro" />
<br><br>

Também agradeçemos ao nosso chefe Filippo, que além de ser um ótimo cozinheiro Italiano, é responsável por manter o sabor deslumbrante das refeições que possuem a tão aclamada Trufa Branca.
  </div>

</div>


</div>
<br>
<div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>
<br><br><br>';
}
    ?>

<div class="row">

<div class="footer" style="color: white;">
  <br>
<div class="col-sm-4"></div>

<div class="col-sm-1">
  <img src="imgddw/insta.png" id="social" />
</div>

<div class="col-sm-1">
  <img src="imgddw/you.png" id="social" />
</div>
<div class="col-sm-1">
  <img src="imgddw/face.png" id="social" />
</div>
<div class="col-sm-1">
  <img src="imgddw/twit.png" id="social" />
</div>

<div class="col-sm-12"><hr style="height: 1px; border: none; color: black; background: grey;"></div>

<div class="col-sm-1">
    <img src="imgddw/tel.png" id="social2" />
</div>

<div class="col-sm-2"><h4 style="margin-left:-25%;">+55 (11) 666333-6663</h4></div>

<div class="col-sm-1"></div>

<div class="col-sm-8">
<h4>Comer Natural - Todos os Direitos Reservados - Copyright 2018.</h4>
</div>


<div class="col-sm-1">
    <img src="imgddw/mail.png" id="social2"  style="margin-left: -135%; margin-top: 20%;" />

</div>


<div class="col-sm-2"><h4 style="margin-left:-81%; margin-top: 14%;">comernaturalcontato@gmail.com</h4></div>

 </div>

</div>

  </div>

</html>