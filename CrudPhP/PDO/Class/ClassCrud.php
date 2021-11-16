<?php 
include("../Class/ClassConexao.php");
 class ClassCrud extends ClassConexao{

    #atributos

    private $Crud;
    private $Contador;


    #preparação das declarativas

private function preparedStatements($Query , $Parametros){
        $this->countParametros($Parametros);
        $this->Crud=$this->ConectaDB()->prepare($Query);

        if($this->Contador > 0){
      for($I = 1; $I <= $this->Contador; $I++){
          $this->Crud->bindValue($I, $Parametros[$I-1]);
      }
    }

      $this->Crud->execute();
    }

    #contador de parâmetros

    private function countParametros($Parametros){

         $this->Contador=count($Parametros);
    }


    #inserção no  Banco de Dados

    public function insertDB($Tabela , $Condicao , $Parametros){

  $this->preparedStatements("insert into {$Tabela} values({$Condicao})", $Parametros);
  return $this->crud;
    }
 }

