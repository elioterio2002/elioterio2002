<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of alunos
 *
 * @author Lenovo
 */
class alunos {
    //Atributos da classe aluno
   var $nome, $serie, $login, $senha;
    

   function getNome() {
       return $this->nome;
   }

   function getSerie() {
       return $this->serie;
   }

   function getLogin() {
       return $this->login;
   }

   function getSenha() {
       return $this->senha;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setSerie($serie) {
       $this->serie = $serie;
   }

   function setLogin($login) {
       $this->login = $login;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }


    
    
    
}
