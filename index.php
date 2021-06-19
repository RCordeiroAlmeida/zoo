<?php
    require_once "functions.php";
    $functionController = new Functions;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo</title>
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/table.css">
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
    <!-- Table with PDO -->
    <div>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Setor</th>
            <th>Editar</th>
            <th>Deletar</th>
          </tr>
        </thead>
        <tbody>
            <?php
               $data = $functionController -> getTableData();

               foreach($data as $animal){
                echo "
                    <tr>
                        <td>$animal[ani_id]</td>
                        <td>$animal[ani_nome]</td>
                        <td>$animal[ani_especie]</td>
                        <td>$animal[set_nome]</td>
                        <td><a href = 'editAnimal.php?ani_id=$animal[ani_id]&ani_nome=$animal[ani_nome]&ani_especie=$animal[ani_especie]'><img src='images/edit_black_24dp.svg'></td>
                        <td><a href ='delete.php?id=$animal[ani_id]'><img src='images/delete_black_24dp.svg'></a></td>
                    </tr>
                ";
               }
            ?>
        </tbody>
      </table>
    </div>
  </main>
  
</body>
</html>