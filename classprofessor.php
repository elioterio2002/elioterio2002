<?php


class classprofessor {
    
     var $nome1, $cpf1, $login1, $senha1, $materia1, $materia2, $materia3;
    

   function getNome1() {
       return $this->nome1;
   }

   function getCpf1() {
       return $this->cpf1;
   }
   
   function getLogin1() {
       return $this->login1;
   }

   function getSenha1() {
       return $this->senha1;
   }
   
   function getMateria1() {
       return $this->materia1;
   }
   
    function getMateria2() {
       return $this->materia2;
   }
   
    function getMateria3() {
       return $this->materia3;
   }
   

   function setNome1($nome1) {
       $this->nome1 = $nome1;
   }
   

   function setCpf1($cpf1) {
       $this->cpf1 = $cpf1;
   }
   
   

   function setLogin1($login1) {
       $this->login1 = $login1;
   }

   function setSenha1($senha1) {
       $this->senha1 = $senha1;
   }
   
   function setMateria1($materia1) {
       $this->materia1 = $materia1;
   }
   
   function setMateria2($materia2) {
       $this->materia2 = $materia2;
   }
   
   function setMateria3($materia3) {
       $this->materia3 = $materia3;
   }
    
}
