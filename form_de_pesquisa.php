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
            
                <h1 class="texto">Colégio Cei</h1>
                <h1 class="texto">Administrador</h1>
                
                <form method="POST" action="autenticar_login.php">
                <input name="login_adm" class="formulario" type="text" placeholder="login" required=""><br>
                <input name="senha_adm" class="formulario" type="text" placeholder="senha" required=""><br>
               
                
                <input class="formulario2" type="submit" value="Entrar como adm" ><br>
                <div id="botao">
                        <a class="btn btn-default" id="" href="index.php">Voltar</a>

            </form>
            
        </div>
    </body>
</html>