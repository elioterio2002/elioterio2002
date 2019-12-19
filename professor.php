<html>
    <head>
        <meta charset="UTF-8">
        <title>Atividade</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body >
        <div class="meio">
            <form method="post" action="Processamento.php">
                <h1 class="texto">Informe as notas do aluno, professor.</h1>
               
                <form 
                
                    <h1>SELECIONE SUA MATÉRIA</h1> <br>
                
                <select id=materias name="materia"> <br>
            <option>Selecione uma por vez</option>
            <option value="portugues" >Português</option>
            <option value="matematica">Matematica</option>
            <option value="ciencias">Ciencias</option>
            <option value="geografia">Geografia</option>
            <option value="historia">Historia</option>
            <option value="ed. fisica">Educação Fisica</option>
            <option value="religiao">Religião</option>
            <option value="redacao">Redação</option>
            <option value="ingles">Inglês</option>
            
            
                </select>    
                    
                <input name="nota1" class="formulario" type="text" placeholder="Informe a nota da 1* unidade" required=""><br>
                <input name="nota2" class="formulario" type="text" placeholder="Informe a nota da 2* unidade" required=""><br>
                <input name="nota3" class="formulario" type="text" placeholder="Informe a nota da 3* unidade" required="" <br>
                <input name="nota4" class="formulario" type="text" placeholder="Informe a nota da 4* unidade se necessário" required="" <br>
                <input name="aluno_id" class="formulario" type="text" placeholder="Informe o ID do aluno" required="" <br>
                <input name="professor_id" class="formulario" type="text" placeholder="Informe o seu ID, professor" required="" <br>
                
                 <input class="formulario2" type="submit" value="Lançar notas" ><br>
                
                </form>
