<!DOCTYPE html>
<html>
<head>
  <title>Alterar Aluno</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  <script src="../Js/cadastro-functions.js"></script>
 </head>
    <body>


       
        <?php
        session_start();
       include('../conexao.php');
       
       $alterar = $_POST['alterar'];
       
          
          $_SESSION['altera'] = $alterar;
       
       
         $altera_sql = "SELECT tb_aluno.nm_aluno as 'nome', tb_aluno.cd_rm as 'rm', tb_aluno.ds_email as 'email', tb_aluno.ds_senha as 'senha', tb_turmas.nm_turmas as 'turma', tb_curso.nm_curso as 'curso', tb_turma_aluno.cd_turma_aluno as 'turmaluno' FROM tb_aluno
   inner join tb_turma_aluno on (tb_aluno.cd_rm = tb_turma_aluno.id_rm)
   inner join tb_turmas on (tb_turmas.cd_turmas = tb_turma_aluno.id_turmas)
   inner join tb_curso on (tb_curso.cd_curso = tb_turmas.id_curso) where cd_rm = ".$_SESSION['altera']."";
         if(!$exe_altera = $mysqli -> query($altera_sql)){
             
             echo $mysqli -> error;
            }
            else{
         
              $row = $exe_altera -> fetch_object(); 
             echo $row ->nome.' '.$row ->rm.' '.$row ->email.' '.$row ->senha.' '.$row ->turma.' '.$row ->curso;
             $_SESSION['turma_aluno'] = $row ->turmaluno;
    
            }
        ?>

        <br><br>
       
       Nome: <input type="text" name="nome" id="nome" placeholder="Digite o seu nome completo"><br>
   Senha: <input type="password" name="senha" id="senha" placeholder="Digite a sua senha"><br>
    RM: &nbsp;&nbsp;&nbsp;<input type="text" maxlength="5" id="rm" onkeypress="return onlynumber();" placeholder="Digite seu RM"><br>
  Turma: <select name="turma" id="turma">

     <option>Selecionar</option>

<?php
 include('conexao.php');
  $consultarsala = "SELECT * from tb_turmas";
      if(!$exesala = $mysqli -> query($consultarsala)){
      echo $myslqi -> error;
         }
   
     else{
      while($rowsala = $exesala ->fetch_object()){
              
              echo "<option value = '$rowsala->cd_turmas'>$rowsala->nm_turmas</option>";
      }
     }
?>


</select><br>

Email : <input type="email" name="email" id="email"><br>
Telefone: <input type="text" class="telefone" id="telefone" /><br>
<input type="button" name="enviar" id="enviar" value="Alterar"><br>
<a href="login.php">Fazer login</a>

    <script type="text/javascript">
  
// Mascarando o campo Telefone
jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
    </script>

<script type="text/javascript">
  
          $(document).ready(function(){
  $("#enviar").click(function(){
    
     var dados = {'rm': $('#rm').val(), 'senha': $('#senha').val(), 'turma': $('#turma').val(), 'nome': $('#nome').val(), 'email': $('#email').val(), 'telefone': $('#telefone').val()};
     $.ajax({
      
      type: 'POST',
      url: '../Ajax/alterar-aluno-ajax.php',
      data: dados, 
      success : function(response){
             
        alert(response);
      }
     });
  });
});
</script>

   </body>
</html>