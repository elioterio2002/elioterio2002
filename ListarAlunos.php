<?php 

include_once 'Conexao.php';

$sql = "SELECT * FROM alunos";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1){
    $alunos[0] = mysqli_fetch_object($result);
}else {
    $alunos = mysqli_fetch_object($result);
}

