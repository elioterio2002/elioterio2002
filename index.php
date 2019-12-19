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
            <form method="post" action="autenticar_login.php">
                <h1 class="texto">Colégio CEI</h1>
                <h1 class="texto">Aluno</h1>
                <input name="login" class="formulario" type="text" placeholder="login" required=""><br>
                <input name="senha" class="formulario" type="text" placeholder="senha" required=""><br>
               
                
                <input class="formulario2"  type="submit" value="Fazer Login" ><br>
            </form>
            <center><a  href="Listar_Alunos.php">Entrar como professor</a></center><br>
            <center><a  href="form_de_pesquisa.php">Administrador</a></center><br>
            <center><a  href="Sair.php">Sair</a></center>
            
        </div>
    </body>
</html>
