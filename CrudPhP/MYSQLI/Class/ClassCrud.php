<?php

 class ClassCrud extends ClassConexao{

    #atributos

    private  $Crud;
    private $Contador;
    private $Resultado;

    #preparação das declarativas
    private function preparedStatements($Query, $Tipos, $Parametros){

        $this->countParametros($Parametros);

        $Con=$this->conectaDB();
        $this->Crud=$Con->prepare($Query);

        if($this->Contador > 0){
       
            $callParametros = array();
            foreach($Parametros as $Key => $Parametros){
                $callParametros[$Key] = &$Parametros[$Key];
            }
            array_unshift($callParametros, $Tipos);
            call_user_func_array(array($this->Crud,'bind_param'), $callParametros);

         
        }
         $this->Crud->execute();
         $this->Resultado=$this->Crud->get_result();
    }


    #contador de parâmetros

    private function countParametros($Parametros){

        $this->Contador=count($Parametros);
    }
 }
?>