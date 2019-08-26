<?php
 session_start();
 $aluno = $_SESSION['id_aluno'];
include('../conexao.php');

$id = $_POST['id'];

//Consultando aluno

  $info_aluno = "SELECT tb_aluno.nm_aluno as 'nome', tb_aluno.cd_rm as 'rm', tb_turmas.nm_turmas as 'turma' from tb_aluno
      inner join tb_turma_aluno on (tb_aluno.cd_rm = tb_turma_aluno.id_rm)
      inner join tb_turmas on (tb_turmas.cd_turmas = tb_turma_aluno.id_turmas) WHERE cd_rm = '$aluno'
      ";

  $exe_info_aluno = $mysqli -> query($info_aluno);

$row = $exe_info_aluno -> fetch_object();

echo "Nome: ".$row->nome." RM: ".$row->rm." Turma: ".$row->turma;


//Consultando armário escolhido

$info_armario = "SELECT  tb_armario.nm_armario as 'armario', tb_tipo_armario.ds_tipo as 'tipo', tb_tipo_armario.vl_armario as'valor' from tb_armario
     inner join tb_tipo_armario on (tb_tipo_armario.cd_tipo_armario = tb_armario.id_tipo_armario)
     WHERE tb_armario.cd_armario = '$id' "
     ;

  $exe_info_armario = $mysqli-> query($info_armario);

  $row_armario = $exe_info_armario -> fetch_object();

  echo " Armario: ".$row_armario->armario." Tipo: ".$row_armario->tipo." Valor: ".$row_armario->valor;
 
?>