<?php include("includes/header.php"); ?>
<?php include("Class/ClassCrud.php"); ?>
<div class="Content"> 

<?php 

$Crud= new ClassCrud();
$IdUser=filter_input(INPUT_GET, 'id',FILTER_SANITIZE_SPECIAL_CHARS);
$BFetch=$Crud->selectDB(

    "*",
    "cadastro",
    "where id=?",
    array($IdUser)
);
$Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
?>
 <h1> Dados do pedido: </h1>
 <hr>
 <strong>Nome do Cliente: </strong><?php echo $Fetch['nomeCli']; ?><br>
 <strong>Pedido: </strong><?php echo $Fetch['Pedido']; ?><br>
 <strong>Observação: </strong><?php echo $Fetch['obs']; ?><br>

</div>

<?php include("includes/footer.php"); ?>
