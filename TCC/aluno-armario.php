<?php
    include('menu.php');

?>

<head>
	<title>Comprar Armários</title>
<meta charset="utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 </head>
<body>
  <script type="text/javascript">
    
    $(document).ready(function(){
    $('.tabs').tabs();
  });
  </script>

  <div class="menu-bloco">
    <ul class="tabs">
    <li class="tab col s3 a"><a href="#">Bloca A</a></li>
    <li class="tab col s3 b"><a href="#">Bloca B</a></li>
    <li class="tab col s3 c"><a href="#">Bloca C</a></li>
    <li class="tab col s3 d"><a href="#">Bloca D</a></li>
    <li class="tab col s3 e"><a href="#">Bloca E</a></li>
    <li class="tab col s3 f"><a href="#">Bloca F</a></li>
    <li class="tab col s3 g"><a href="#">Bloca G</a></li>
    <li class="tab col s3 h"><a href="#">Bloca H</a></li>
    <li class="tab col s3 i"><a href="#">Bloca I</a></li>
    <li class="tab col s3 j"><a href="#">Bloca J</a></li>
    <li class="tab col s3 k"><a href="#">Bloca K</a></li>
    <li class="tab col s3 l"><a href="#">Bloca L</a></li>
    <li class="tab col s3 m"><a href="#">Bloca M</a></li>
    <li class="tab col s3 n"><a href="#">Bloca N</a></li>
    <li class="tab col s3 o"><a href="#">Bloca O</a></li>
    <li class="tab col s3 p"><a href="#">Bloca P</a></li>
    <li class="tab col s3 q"><a href="#">Bloca Q</a></li>
    <li class="tab col s3 r"><a href="#">Bloca R</a></li>
    </ul>
  </div>
<div class="meta">
	<?php
  session_start();

  if(empty($_SESSION['id_aluno'])){
   header('location: login.php');
  }
    include('conexao.php');
  
	?>
  </div>
<script>
          $(document).ready(function(){
            $('.a').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocoa.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
             $('.b').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocob.svg"></object></center>';

          eval($('.meta').html(bloco));

     });

       $('.c').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blococ.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.d').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocod.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.e').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocoe.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.f').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocof.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.g').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocog.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.h').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocoh.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.i').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocoi.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.j').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocoj.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.k').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocok.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
      $('.l').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocol.svg"></object></center>';

          eval($('.meta').html(bloco));

     });       
       $('.m').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocom.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
        $('.n').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocon.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
         $('.o').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocoo.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
          $('.p').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocop.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
           $('.q').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocoq.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
            $('.r').click(function(){
          $('.meta').empty();

          var bloco = '<center><object type="image/svg+xml" data="bloco/blocor.svg"></object></center>';

          eval($('.meta').html(bloco));

     });
  });
</script>
</body>
<?php
    include('footer.php');

?>