<?php 

include_once 'Conexao.php';

$idAluno = $_GET['id'];

//nota do aluno
$sql = "SELECT nota1 as  'Nota 1',nota2 as  'Nota 2',nota3 as  'Nota 3',nota4 as  'Nota 4' FROM notas where aluno_id = $idAluno";
$result = mysqli_query($con, $sql);
$notas = mysqli_fetch_object($result);

//Aluno
$sql = "SELECT * FROM alunos where id = $idAluno";
$result = mysqli_query($con, $sql);
$aluno = mysqli_fetch_object($result)->nome;
