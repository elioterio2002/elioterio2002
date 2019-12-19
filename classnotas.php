<?php


class classnotas {
    
     var $materia,$nota1, $nota2, $nota3, $nota4, $aluno_id, $professor_id;
     
     function getMateria() {
       return $this->materia;
   }
     
     
     function getNota1() {
       return $this->nota1;
   }

   function getNota2() {
       return $this->nota2;
   }
   
   function getNota3() {
       return $this->nota3;
   }

   function getNota4() {
       return $this->nota4;
   }
   
   function getAluno_id() {
       return $this->aluno_id;
   }
   
    function getProfessor_id() {
       return $this->professor_id;
   }
   
   function setMateria($materia) {
       $this->materia = $materia;
   }
   

   function setNota1($nota1) {
       $this->nota1 = $nota1;
   }
   

   function setNota2($nota2) {
       $this->nota2 = $nota2;
   }
   
   

   function setNota3($nota3) {
       $this->nota3 = $nota3;
   }

   function setNota4($nota4) {
       $this->nota4 = $nota4;
   }
   
   function setAluno_id($aluno_id) {
       $this->aluno_id = $aluno_id;
   }
   
   function setProfessor_id($professor_id) {
       $this->professor_id= $professor_id;
   }
   
   
    
}
    

   

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

