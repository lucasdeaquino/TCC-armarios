<!DOCTYPE html>
<html>
<head>
	<title>Alunos</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta charset="utf-8">
 </head>
    <body>

      <nav id="nav">
    <div class="nav-wrapper black">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a id="menu" href="adm-aluno.php">Lista de Alunos</a></li>
        <li><a id="menu" href="armarios.php">Armários</a></li>
        <li><a id="menu" href="adm-reservas.php">Reservas</a></li>
           <li><a id="menu" href="cadastro-adm.php">Cadastrar Administrador</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
     
     <center> <img id="daora" src="legal1.png"></center> 
 </div>

      <div class="container">

        <table>
         <thead>
            <tr>
              <th>Nome</th>
              <th>RM</th>
              <th>Email</th>
              <th>Senha</th>
              <th>Turma</th>
              <th>Curso</th>
          </tr>
        </thead>
        
         <form action="altera-aluno.php" method="post">
          <?php
           
           include('../conexao.php');
             $aluno = "SELECT tb_aluno.nm_aluno as 'nome', tb_aluno.cd_rm as 'rm', tb_aluno.ds_email as 'email', tb_aluno.ds_senha as 'senha', tb_turmas.nm_turmas as 'turma', tb_curso.nm_curso as 'curso' FROM tb_aluno
   inner join tb_turma_aluno on (tb_aluno.cd_rm = tb_turma_aluno.id_rm)
   inner join tb_turmas on (tb_turmas.cd_turmas = tb_turma_aluno.id_turmas)
   inner join tb_curso on (tb_curso.cd_curso = tb_turmas.id_curso)";
 

             if(!$exealuno = $mysqli -> query($aluno)){
                   
                   $mysqli -> error;
                  
                  }

                  else{

                    while($row = $exealuno->fetch_object()){
                       
                       echo $row ->nome.' '.$row ->rm.' '.$row ->email.' '.$row ->senha.' '.$row ->turma.' '.$row ->curso." <button class = 'bnt btn-primary' name = 'alterar' id = 'alterar' value= ".$row->rm." >Alterar</button> <br>";
                    }

                  }

          ?>
    </table>
    </div>
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