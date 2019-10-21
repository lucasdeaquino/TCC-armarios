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
		<div class="row">	
			<div class="col s12 m6">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<span class="card-title">Administrador</span>
						<p>Olá Admisitrador, esta e a área feita pra você! aqui voce poderá organizar <br>e gerenciar o sistema de compra venda e reserva de armarios com práticidade e de forma rapida e segura ! .</p>
					</div>
					<div class="card-action"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div id="balao1">
			<div class="row">	
				<div class="col s6 m6">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Reservas</span>
							<p>Veja as reservas de ármarios feitas pelos alunos e avilie se vai ser aprovada ou não.</p>
						</div>
						<div class="card-action">
							<a href="adm-reservas.php">Ver Reservas</a>
						</div>
					</div>
				</div>
				<div class="col s6 m6">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Armarios</span>
							<p>Aqui voce pode ver a localização de cada ármario da Etec.</p>
						</div>
						<div class="card-action">
							<a href="../aluno-armario.php">Ver Armarios</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s6 m6">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Cadastrar Adminstador</span>
							<p>Cadastre um novo administrador de sua conficança para gerenciar o sistema também.</p>
						</div>
						<div class="card-action">
							<a href="cadastro-adm.php">Cadastrar Administrador</a>
						</div>
					</div>
				</div>
				<div class="col s6 m6">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Lista de Alunos</span>
							<p>Aqui você pode conferir a lista de alunos da escola para ter melhor controle.</p>
						</div>
						<div class="card-action">
							<a href="adm-aluno.php">Ir para a lista</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</center>

<style type="text/css">

#balao{
  width: 50%;
}

#balao1{
  width: 70%;
}





#daora{
margin-top:-5%; 
width: 30%;
transition: 1s;
}



</style>
<?php
include('../footer.php');
?>

</body>

</html>