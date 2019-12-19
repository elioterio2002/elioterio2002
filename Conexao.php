<?php
    //conectando o banco de dados e selecionando
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "registro";
    $con = mysqli_connect($host, $user, $pass, $database);
    if($con){
        
   
    }
    else{
        echo'nao Conectado';
    }      
    
        
?>