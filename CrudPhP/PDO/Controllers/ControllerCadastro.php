<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$crud = new ClassCrud();
$crud->insertDB(

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

