<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais</title>
</head>
<body>


    <?php
        require_once "functions.php";
    ?>
    <form action="" method="post">
        <label for="nome_animal">Nome do animal:</label>
        <input type="text" name="ani_nome" id="nome_animal">

        <label for="ani_especie">Espécie do animal:</label>
        <input type="text" name="ani_especie" id="ani_especie">
        

        <label for="select_setor" name="select_setor">Selecione a qual setor este animal pertence:</label>
        
        <select name="select_setor"  id="select_setor">
            <?php

      

                foreach($fetchSetores as $key => $value){
                    echo "<option value =''>1</option>";
                }
            ?>
        </select>
        <input type="submit" value="Cadastrar">
        <?php
            if(isset($_POST['ani_nome'])){
                $functioncontroller -> ani_nome = $_POST['ani_nome'];
                $functioncontroller -> ani_nome();
                echo 'cadastrado com sucesso';
            }
        ?>
        
    </form>
</body>
</html>