<?php 
include_once 'ListarAlunos.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atividade</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body >
        <div class="meio">
             <h1> Alunos Cadastrados</h1>

            <?php 
                foreach($alunos as $aluno){
                    echo "<a href='Aluno.php?id=$aluno->id'> $aluno->nome </a>";
                }
            ?>
        </div>
    </body>
</html>