<html>
    <head>
        <meta charset="UTF-8">
        <title>Atividade</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="meio">
            <form method="post" action="Processamento.php">
                <h1 class="texto">Colégio São Luís</h1>
                <div class="formulario_seg">
              <?php
                
                //Incluindo os arquivos php
                include ("Conexao.php");
                include("alunos.php");
                include("classprofessor.php");
                include("classnotas.php");
                
                
                //Criando o objeto estudante e nota
                $estudante = new alunos();
                
                
                //Capturando as informacoes do formulario e enviando para as variaveis correspondentes
                $estudante->setNome(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING));
                $estudante->setSerie(filter_input(INPUT_POST,'serie',FILTER_SANITIZE_NUMBER_INT));
                $estudante->setLogin(filter_input(INPUT_POST,'login',FILTER_SANITIZE_STRING));
                $estudante->setSenha(filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING));
                
                //Atribuindo os valores para as variaveis do banco de dados
                $nome = $estudante->getNome();
                $serie = $estudante->getSerie();
                $login = $estudante->getLogin();
                $senha = $estudante->getSenha();

                
                if($nome !=null){
                //Inserindo os valores das variaveis na tabela do banco de dados
                $sql = "INSERT INTO alunos (nome, serie, login, senha)
                 VALUES ('$nome', '$serie', '$login', '$senha')";
                    
                    
                    if (mysqli_query($con, $sql)) //Realiza uma consulta no banco de dados e retornando uma mensagem 
                        {
                            
                            echo "Cliente Registrado com Sucesso!";
                        } 
                    else
                        {
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        }
                            mysqli_close($con);
                }            
                
                $professor= new classprofessor();
                
                
                //Capturando as informacoes do formulario e enviando para as variaveis correspondentes
                $professor->setNome1(filter_input(INPUT_POST,'nome1',FILTER_SANITIZE_STRING));
                $professor->setCpf1(filter_input(INPUT_POST,'cpf1',FILTER_SANITIZE_NUMBER_INT));
                $professor->setLogin1(filter_input(INPUT_POST,'login1',FILTER_SANITIZE_STRING));
                $professor->setSenha1(filter_input(INPUT_POST,'senha1',FILTER_SANITIZE_STRING));
                $professor->setMateria1(filter_input(INPUT_POST,'materia1',FILTER_SANITIZE_STRING));
                 $professor->setMateria2(filter_input(INPUT_POST,'materia2',FILTER_SANITIZE_STRING));
                  $professor->setMateria3(filter_input(INPUT_POST,'materia3',FILTER_SANITIZE_STRING));
                
                //Atribuindo os valores para as variaveis do banco de dados
                $nome1 = $professor->getNome1();
                $cpf1 = $professor->getCpf1();
                $login1 = $professor->getLogin1();
                $senha1 = $professor->getSenha1();
                $materia1 = $professor->getMateria1();
                $materia2 = $professor->getMateria2();
                $materia3 = $professor->getMateria3();
                
                if($nome1 !=null){
                //Inserindo os valores das variaveis na tabela do banco de dados
                $sqn = "INSERT INTO teacher (nome1, cpf1, login1, senha1, materia1, materia2, materia3)
                 VALUES ('$nome1', '$cpf1', '$login1', '$senha1', '$materia1','$materia2','$materia3')";
                    
                    
                    if (mysqli_query($con, $sqn)) //Realiza uma consulta no banco de dados e retornando uma mensagem 
                        {
                            
                            echo "Professor Registrado com Sucesso!";
                        } 
                    else
                        {
                            echo "Error: " . $sqn . "<br>" . mysqli_error($con);
                        }
                            mysqli_close($con);
                }    
                
                
                //Criando o objeto estudante e nota
                $notas = new classnotas();
                
                
                //Capturando as informacoes do formulario e enviando para as variaveis correspondentes
                $notas->setMateria(filter_input(INPUT_POST,'materia',FILTER_SANITIZE_STRING));
                $notas->setNota1(filter_input(INPUT_POST,'nota1',FILTER_SANITIZE_STRING));
                $notas->setNota2(filter_input(INPUT_POST,'nota2',FILTER_SANITIZE_STRING));
                $notas->setNota3(filter_input(INPUT_POST,'nota3',FILTER_SANITIZE_STRING));
                $notas->setNota4(filter_input(INPUT_POST,'nota4',FILTER_SANITIZE_STRING));
                $notas->setAluno_id(filter_input(INPUT_POST,'aluno_id',FILTER_SANITIZE_NUMBER_INT));
                $notas->setProfessor_id(filter_input(INPUT_POST,'professor_id',FILTER_SANITIZE_NUMBER_INT));
                
                //Atribuindo os valores para as variaveis do banco de dados
                $materia = $notas->getMateria();
                $nota1 = $notas->getNota1();
                $nota2 = $notas->getNota2();
                $nota3 = $notas->getNota3();
                $nota4 = $notas->getNota4();
                $aluno_id = $notas->getAluno_id();
                $professor_id = $notas->getProfessor_id();
                
                if($nota1 !=null){
                //Inserindo os valores das variaveis na tabela do banco de dados
                $sqd = "INSERT INTO notas (materia, nota1, nota2, nota3, nota4, aluno_id, professor_id)
                 VALUES ('$materia', '$nota1', '$nota2', '$nota3', '$nota4', $aluno_id, $professor_id)";
                    
                    
                    if (mysqli_query($con, $sqd)) //Realiza uma consulta no banco de dados e retornando uma mensagem 
                        {
                            
                            echo "Boletim Registrado com Sucesso!";
                        } 
                    else
                        {
                            echo "Error: " . $sqd . "<br>" . mysqli_error($con);
                        }
                            mysqli_close($con);
                }            

               
                
                
               ?>
                </div>
                
            </form>
              <div id="botao">
                        <a class="btn btn-default" href="index.php">Voltar</a>
                    </div>
            
            <div id="botao">
                        <a class="btn btn-default" href="blaluno.php">Visualizar boletim</a>
                    </div>
               
        </div>
        
    </body>
</html>
