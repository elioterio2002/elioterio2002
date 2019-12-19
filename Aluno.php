<?php 
include_once 'NotasAluno.php';
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
             <h1> Notas de <?php echo $aluno?></h1>

            <?php 
                foreach($notas as $id => $nota){
                    echo $id. " " . $nota . "<br>";
                    
                    
                }
                
                
            ?>
        </div>
    </body>
</html>