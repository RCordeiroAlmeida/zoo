<?php
  require_once  "functions.php";
  $functioncontroller = new Functions;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo - Cadastre um setor</title>
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
          <h2 class="title">Cadastre um setor</h2>

          <input type="text" name="set_nome" placeholder="Nome do Setor" required>

          <input type="submit" class="button" value="Cadastrar">
        </fieldset>
      </form>
    </div>
  </main>

  <?php
    if(isset($_POST['set_nome'])) {
      $functioncontroller -> set_nome = $_POST['set_nome'];
      $functioncontroller -> setSetor();
      header("Location: cadastroAni.php");
    }
  ?>
</body>
</html>