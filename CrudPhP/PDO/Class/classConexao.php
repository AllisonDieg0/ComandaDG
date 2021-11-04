<?php

  abstract class ClassConexao {

    protected function ConectaDB(){

      try{

    $con = new PDO("mysql:host=localhost;dbname=crud","root" ,"");

         return $con;

      }catch(PDOException $Erro){

         return $Erro->getMessage();
      }
     }
    }

    ?>