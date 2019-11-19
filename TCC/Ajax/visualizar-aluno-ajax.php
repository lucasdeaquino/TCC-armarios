<?php


include ('../conexao.php');

$vis = $_POST['vis'];


$select_vis = "SELECT tb_aluno.nm_aluno AS 'nome', tb_aluno.cd_rm AS 'rm', tb_aluno.ds_email AS 'email', tb_aluno.ds_senha AS 'senha', tb_turmas.nm_turmas AS 'turma', tb_curso.nm_curso AS 'curso'
FROM tb_aluno
INNER JOIN tb_turma_aluno ON ( tb_aluno.cd_rm = tb_turma_aluno.id_rm )
INNER JOIN tb_turmas ON ( tb_turmas.cd_turmas = tb_turma_aluno.id_turmas )
INNER JOIN tb_curso ON ( tb_curso.cd_curso = tb_turmas.id_curso )
LEFT JOIN tb_reserva ON ( tb_reserva.id_aluno1_reserva = tb_aluno.cd_rm
AND tb_reserva.id_aluno2_reserva = tb_aluno.cd_rm ) where cd_rm = '$vis'";

$exe_select_vis = $mysqli->query($select_vis);

$row = $exe_select_vis->fetch_object();

echo 'RM: '. $row->rm.'<br>
Nome: '.$row->nome.'<br>
E-mail: '.$row->email.'<br>
Senha: '.$row->senha.'<br>
Turma: '.$row->turma.'<br>
Curso: '.$row->curso;

?>