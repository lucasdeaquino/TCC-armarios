<?php

include('../conexao.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
</head>
<meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<body>
<a href="#">Geral</a>
<a href="#">Seus registros</a>
<a href="#">Alunos</a>

<table class="striped">
        <thead>
          <tr>
          	  <th>Autor</th>
              <th>Data</th>
              <th>Hora</th>
              <th>Ação</th>
          </tr>
        </thead>

        <tbody>
<?php

 $consultar_registro = "SELECT * FROM tb_registro_adm";
     $exe_consultar_registro = $mysqli->query($consultar_registro);
       while($row = $exe_consultar_registro->fetch_object()){

       	  echo '
          <tr>
            <td></td>
            <td>'.$row->dt_registro_adm.'</td>
            <td>'.$row->hr_registro_adm.'</td>
            <td>'.$row->ds_registro.'</td>
          </tr>
         
        ';
       } 

?>
    </tbody>
      </table>

</body>
</html>