<?php

# Alterar o nome de cada váriavel para a nomenclatura correta do banco de dados
# No caso, eu Limão, não tenho

if(isset($_POST['Id'])){
    $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Id'])){
    $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Id=0;
}

if(isset($_POST['cli'])){
    $cli=filter_input(INPUT_POST,'cli',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['cli'])){
    $cli=filter_input(INPUT_GET,'cli',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $cli="";
}

if(isset($_POST['ped'])){
    $ped=filter_input(INPUT_POST,'ped',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['ped'])){
    $ped=filter_input(INPUT_GET,'ped',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $ped="";
}

if(isset($_POST['obs'])){
    $obs=filter_input(INPUT_POST,'obs',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['obs'])){
    $obs=filter_input(INPUT_GET,'obs',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $obs="";
}

