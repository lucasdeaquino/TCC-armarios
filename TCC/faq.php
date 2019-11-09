<?php
	include('menu.php')
 ?>
<head>

<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

	<title></title>
</head>
<body>

<div class="row">
	<div  class="z-depth-2">
		<br>
		<br>
		<br>
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Digite seu nome.." id="first_name" type="text" class="validate">
          <label for="first_name">Nome completo</label>
      </div>
        <div class="input-field col s6">
          <input placeholder="Digite seu email.." id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        </div>
            <div class="row">
        <div class="input-field col s12">
          <input placeholder="Digite a sua mensagem.." id="mensagem" type="text" class="validate">
          <label for="mensagem">Mensagem</label>
        </div>
      </div>
      <center><button class="btn waves-effect waves-light indigo darken-3" type="button" name="enviar" id="enviar" value="enviar">Enviar</button></center>
      <br>
    </form>
  </div>
</div>
<br>
<br>
<br>

</body>
<?php 
	include('footer.php');
?>

<style type="text/css">
	
	  .z-depth-2{
      width: 80%;
      height: 340px;
      margin: 0 auto;
      border-radius: 8%;
      background-color: white;
  }
</style>