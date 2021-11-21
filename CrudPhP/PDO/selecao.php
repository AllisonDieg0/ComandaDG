<?php
include("includes/header.php"); 
 include("Class/ClassCrud.php");
?>

<div class="Content"> 
 
<table class="TabelaCrud">
    <tr>
        <td>Nome do Cliente</td>
        <td>Pedido</td>
        <td>Observação</td>
        <td>Ações</td>
    </tr>
<!-- Estrutura de Loop-->
<?php    

$Crud=new  ClassCrud();
$BFetch=$Crud->selectDB(
    "*",
    "cadastro",
    "",
    array()
);

while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
 ?>
    <tr>
        <td> <?php echo $Fetch['nomeCli']; ?> </td>
        <td><?php echo $Fetch['Pedido']; ?> </td>
        <td><?php echo $Fetch['obs']; ?> </td>
        <td>
            <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><img src="images/visu.png" width=30px alt="Visualizar"></a>
            <a href="atualizacao.php"><img src="images/edit.png" width=30px alt="Editar"></a>
            <a href="delete.php"><img src="images/delete.png" width=30px alt="Deletar"></a>
        </td>
    </tr>

 <?php   
}

?>

</table>

</div>

<?php include("includes/footer.php"); ?>