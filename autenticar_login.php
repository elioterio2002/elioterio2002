<?php

include_once 'Conexao.php'; // Chamando a conexão com o banco

$login_aluno = @$_POST['login']; // Atribuindo os valores dos inputs a estas variáveis
$senha_aluno = @$_POST['senha'];
$login_prof = @$_POST['login_prof']; // Atribuindo os valores dos inputs a estas variáveis
$senha_prof = @$_POST['senha_prof'];
$login_adm = @$_POST['login_adm'];
$senha_adm = @$_POST['senha_adm'];


$sql = "SELECT * FROM alunos WHERE login = '$login_aluno' AND senha='$senha_aluno'";
$result = mysqli_query($con, $sql);
$row = mysqli_num_rows($result);


$sql1 = "SELECT * FROM teacher WHERE login1 = '$login_prof' AND senha1='$senha_prof'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_num_rows($result1);

if ($login_aluno != null) {
    if ($row > 0 && $row1 <= 0) {
        header("Refresh: 0.5;URL=blaluno.php");
    } else {
        header("Refresh: 0.5;URL=index.php");
        ?>
        <script>
            alert("Login ou senha invalida!!");

        </script>
        <?php

    }
}

if ($login_prof != null) {
    if ($row1 > 0 && $row <= 0) {
        header("Refresh: 0.5;URL=professor.php");
    } else {
        header("Refresh: 0.5;URL=Listar_Alunos.php");
        ?>
        <script>
            alert("Login ou senha invalida!!");

        </script>
        <?php

    }
}

if($login_adm != null){
    if ($login_adm == "adm" && $login_adm == "Adm" || $senha_adm == "adm") {

            header("Refresh: 0.5;URL=Pesquisar.php");
        } else {
            header("Refresh: 0.5;URL=form_de_pesquisa.php");
            ?>
            <script>
                alert("Login ou senha invalida!!");

            </script>
            <?php

        }



}


