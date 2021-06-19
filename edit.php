<?php
    if(isset($_GET['ani_id']) && isset($_GET['ani_nome']) && isset($_GET['ani_especie'])){
        require_once "functions.php";
        $functionController = new Functions;
        $functionController -> editAnimals($_GET['ani_id'], $_GET['ani_nome'], $_GET['ani_especie']);
        
        header("Location: index.php");
        //echo var_dump($_GET);
    }
?>