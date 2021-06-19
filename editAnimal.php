<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/form.css">
</head>
<body>
    <header>
        <nav>
        <h1 class="logo">Zoo</h1>
        <ul class="link-list">
            <li><a href="index.php">Página Principal</a></li>
            <li><a href="cadastroSet.php">Cadastrar Setor</a></li>
            <li><a href="cadastroAni.php">Cadastrar Animal</a></li>
        </ul>
        </nav>
    </header>
    <main>
        <?php
            if(isset($_GET['ani_id']) && isset($_GET['ani_nome']) && isset($_GET['ani_especie'])){
        
        ?>
        <div>
            <form action="edit.php" method="get">
                <fieldset>
                    <h2 class = "title">Editar dados do animal</h2>
                    <input type="text" value="<?php echo $_GET['ani_nome'];?>" placeholder="Nome do animal" name="ani_nome">
                    <input type="text" value="<?php echo $_GET['ani_especie'];?>" placeholder="Espécie do animal" name="ani_especie">
                    <input type="hidden" name="ani_id" value="<?php echo $_GET['ani_id'];?>">
                    <input type="submit" value="Atualizar" class = "button">
                </fieldset>
            </form>
        </div>
        <?php } ?>
    </main>
</body>
</html>
