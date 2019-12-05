<!DOCTYPE html>
<html>
<head>
	<title>Reservas</title>



 <meta charset="utf-8">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
 </head>
 <script type="text/javascript">
   $(document).ready(function(){
            $('.ap').click(function(){
    $('.modal').modal();
  });
            $('.rc').click(function(){
    $('.modal').modal();
  });
  });
 </script>
    <body>
<?php
    include('menu-adm.php');
?>
<div id="cadastro"><div id="fundo"><br><div  class="z-depth-2"><div id="cadastro"><br><br>

      
  <div class="container">
<table class="striped">
        <thead>
          <tr>
              <th>Aluno</th>
              <th>RM</th>
              <th>Turma</th>
              <th>Data</th>
              <th>Hora</th>
              <th>Armário</th>
              <th>Tamanho</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody>
      <?php
      session_start();
           if(empty($_SESSION['id_adm'])){
            header('location: ../login.php');

           }
      include('../conexao.php');

        $exibir_reserva = "SELECT tb_aluno.nm_aluno as 'aluno',tb_aluno.cd_rm as 'rm', tb_turmas.nm_turmas as 'turma', tb_reserva.dt_reserva as 'data', tb_reserva.hr_reserva as 'hora', tb_armario.nm_armario as 'armario', tb_tipo_armario.ds_tipo as 'tipo', tb_reserva.cd_reserva as 'cd' from tb_reserva
         inner join tb_aluno on (tb_aluno.cd_rm =  tb_reserva.id_aluno1_reserva)
         INNER JOIN tb_turma_aluno ON ( tb_aluno.cd_rm = tb_turma_aluno.id_rm )
INNER JOIN tb_turmas ON ( tb_turmas.cd_turmas = tb_turma_aluno.id_turmas )
INNER JOIN tb_curso ON ( tb_curso.cd_curso = tb_turmas.id_curso )
         inner join tb_armario on (tb_armario.cd_armario = tb_reserva.id_armario_reserva)
         inner join tb_tipo_armario on (tb_tipo_armario.cd_tipo_armario = tb_armario.id_tipo_armario)
         ";

         if(!$exe_reserva = $mysqli -> query($exibir_reserva)){

         	   echo $mysqli->error;

              }

              else{

                while($row = $exe_reserva->fetch_object()){
                  echo '<tr>';
                  echo '<td>'.$row->aluno.'</td>';
                  echo '<td>'.$row->rm.'</td>';
                  echo '<td>'.$row->turma.'</td>';
                  echo '<td>'.$row->data.'</td>';
                  echo '<td>'.$row->hora.'</td>';
                  echo '<td>'.$row->armario.'</td>';
                  echo '<td>'.$row->tipo.'</td>';
                  echo '<td><button data-target="modal1" class = "btn waves-effect green darken-1 ap modal-trigger" value = "'.$row->cd.'">Aprovar</button>
                            <button data-target="modal2" class = "btn waves-effect red darken-1 rc modal-trigger" value = "'.$row->cd.'">Recusar</button> </td>';
                  echo '</tr>';
                }
              }

      ?>

    </tbody>
      </table>
      <script>
        $('#close').click(function(){
       
       $('.modal').modal('hide');

     });
          $(document).ready(function(){
       
          //aprovar reserva

           $('.ap').click(function(){
              var aprova = $(this).val();

         $('.aprovar').click(function(){
       var dado = {'apr': aprova};
     $.ajax({
      
    
      type: 'POST',
      url: '../Ajax/aprovar-reserva-ajax.php',
      data: dado, 

      success : function(response){
            
      $('.inf').empty();
      $('.sub').empty();
      $('.mod').empty();
      $('.d1').empty();
     var gif = "<img src = '../imagens/confirmado.gif' id='gif'>";
      var text = "Reserva aprovada com sucesso.";
      var ok = '<a class="waves-effect waves-green btn-flat ok">Ok</a>'; 
    $('.inf2').html(gif);
    $('.inf2').append(text);
    $('.d2').html(ok);

    $('.ok').click(function(){
  var refresh = '<meta http-equiv="refresh" content="0.5;url=adm-reservas.php">';
  $('head').html(refresh);
    });
       
      }
    
        });
    });

    });

            //recusar reserva

             $('.rc').click(function(){
              var recusa = $(this).val();

         $('.recusar').click(function(){
       var dados = {'rec': recusa};
     $.ajax({
      
    
      type: 'POST',
      url: '../Ajax/recusar-reserva-ajax.php',
      data: dados, 

      success : function(response){
            
      $('.inf2').empty();
      $('.sub2').empty();
      $('.mod2').empty();
      $('.d2').empty();
     var gif = "<img src = '../imagens/confirmado.gif' id='gif'>";
      var text = "Reserva recusada com sucesso.";
      var ok = '<a class="waves-effect waves-green btn-flat ok">Ok</a>'; 
    $('.inf2').html(gif);
    $('.inf2').append(text);
    $('.d2').html(ok);

    $('.ok').click(function(){
  var refresh = '<meta http-equiv="refresh" content="0.5;url=adm-reservas.php">';
  $('head').html(refresh);
    });
       
      }
    
        });
    });

    });
  });
         </script>

<!-- Modal de aprovar -->
<script language="javascript">   
function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
 </script>  

   <div id="modal1" class="modal">
     <div class="modal-content">
       <h4 class="inf">Aprovar a reserva</h4>
    <p class="sub">insira o valor pago (em reais).</p>
   <span class="mod"><input type="text" id="valor" class="valor " onKeyPress="return(moeda(this,'.',',',event))" placeholder="EX: 50,00"></span>
 </div>

    <div class="modal-footer d1">
       <a id="close" class="modal-close waves-effect waves-red btn-flat">Cancelar</a>
      <button class="waves-effect waves-green btn-flat aprovar">Confirmar</button>
      <span class="prep"></span>
    </div>

  </div>


<!-- Modal de recusar -->

   <div id="modal2" class="modal">
     <div class="modal-content">
       <h4 class="inf2">Você tem certeza que deseja recusar a reserva?</h4>
    <p class="sub2">Explique o motivo para o aluno.</p>
   <span class="mod2"><textarea class="mot" cols="12" rows="50"></textarea></span>
 </div>

    <div class="modal-footer d2">
      <a id="close" class="modal-close waves-effect waves-red btn-flat">Cancelar</a>
      <button class="waves-effect waves-green btn-flat recusar">Confirmar</button>

      <span class="prep"></span>
    </div>

  </div>

       </div> 
       </div>
</div>
</div>
</div>                                                                     
    </body>
 </html>

 <style type="text/css">
  
    .z-depth-2{
      width: 1100px;
      margin: 0 auto;
      border-radius: 10%;
      background-color: white;
  }
  #cadastro{
      width: 100%;
      margin: 0 auto;
      border-radius: 500px;
      background-color: white;
  }

   #gif{
   height: 100px;
;

   }
   .modal-content{
    background-color: white;
   }
   .modal-footer{
    background-color: white;
   }
 </style>