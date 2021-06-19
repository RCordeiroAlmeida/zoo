<?php
  require_once "functions.php";
  $functioncontroller = new Functions;
  $setores = $functioncontroller -> getSetor();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo - Cadastre um Animal</title>
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
    <div>
      <form action="" method="post">
        <fieldset>
          <h2 class="title">Cadastre um animal</h2>

          <input type="text" name="ani_nome" placeholder="Nome do animal">
          <input type="text" name="ani_especie" placeholder="Espécie do animal">

          <select name="select_setor" id="select_setor">
            <option value ='' disabled selected>Selecione um setor</option>
            <?php


              foreach ($setores as $setor) {
                echo "<option value ='$setor[set_id]'>$setor[set_nome]</option>";
              }
            ?>
          </select>
          <input type="submit" class="button" value="Cadastrar">
        </fieldset>
      </form>
    </div>
  </main>
  
  <?php
    if(isset($_POST['ani_nome']) && isset($_POST['ani_especie']) && isset($_POST['select_setor'])){
      
      $functioncontroller -> ani_nome = $_POST['ani_nome'];
      $functioncontroller -> ani_especie = $_POST['ani_especie'];
      $functioncontroller -> set_id = $_POST['select_setor'];

      $functioncontroller -> setAnimal();
    }
  ?>

</body>

</html>