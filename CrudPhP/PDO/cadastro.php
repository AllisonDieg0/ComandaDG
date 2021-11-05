<?php include("includes/header.php"); ?>

<div class="Content"> 

<?php

include("Class/ClassConexao.php");
include("Class/ClassCrud.php");

?>
<div class="Resultado"></div>
<div class="Formulario">
    <h1 class="center"> Cadastro De Pedidos</h1>

    <div class="FormularioInput">
        Cliente: <br>
        <input type="text" id="cli"  name="nomeCli">

    </div>

    <div class="FormularioInput">
        Pedido: <br>
        <input type="text" id="ped"  name="pedido">
        
    </div>

    <div class="FormularioInput">
        Observação: <br>
        <input type="text" id="obs"  name="obs">
        
    </div>

    <div class="FormularioBtn FormularioInput100 center">
        
        <input type="submit", value="Cadastrar">
        
    </div>
</div>

</div>

<?php include("includes/footer.php"); ?>