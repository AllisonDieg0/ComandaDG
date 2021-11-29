<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();
$Crud->insertDB(

    "cadastro",
    "?,?,?,?",
    array(

        $id,
        $cli,
        $ped,
        $obs
    )

);

echo "cadastro realizado com sucesso!";

