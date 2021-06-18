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
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <h1>Cadastro de setor</h1>

    <label for="set_nome">Nome do Setor:</label>
    <input type="text" name="set_nome" id="set_nome">

    <input type="submit" value="Cadastrar">
  </form>

  <?php
    if(isset($_POST['set_nome'])) {
      $functioncontroller -> set_nome = $_POST['set_nome'];
      $functioncontroller -> setSetor();
    }
  ?>
</body>
</html>