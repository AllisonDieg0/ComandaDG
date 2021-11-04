<?php

 abstract class ClassConexao {

     protected function ConectaDB(){

      try{

         $Con= new mysqli("localhost","root", "","crud");
         return $Con;

      }catch(Exception $Erro){

        return $Erro->getMessage();

        
      }
     }
    }

    ?>