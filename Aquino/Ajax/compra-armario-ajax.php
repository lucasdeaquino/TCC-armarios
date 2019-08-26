<?php
 session_start();
 $aluno = $_SESSION['id_aluno'];
include('../conexao.php');

$id = $_POST['id'];

  $info_aluno = "SELECT tb_aluno.nm_aluno as 'nome', tb_aluno.cd_rm as 'rm', tb_turmas.nm_turmas as 'turma', tb_turmas.vl_reserva_g as 'valorg', tb_turmas.vl_reserva_p as 'valorp' from tb_aluno
      inner join tb_turma_aluno on (tb_aluno.cd_rm = tb_turma_aluno.id_rm)
      inner join tb_turmas on (tb_turmas.cd_turmas = tb_turma_aluno.id_turmas WHERE cd_rm = '$aluno'
      )";

  $exe_info_aluno = $mysqli -> query($info_aluno);






 
?>