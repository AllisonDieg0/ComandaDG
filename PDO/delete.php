<?php include("Class/ClassCrud.php"); ?>

<?php 

$Crud= new ClassCrud();
$IdUser=filter_input(INPUT_GET, 'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(

    "cadastro",
    "id=?",
    array($IdUser)

);

echo "dado deletado com sucesso!";