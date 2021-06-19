<?php
    if(isset($_GET['id'])){
        require_once "functions.php";
        $functionController = new Functions;

        $functionController -> deleteAnimals($_GET['id']);

        header('Location: index.php');
    }
?>