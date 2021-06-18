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
        <li><a href="cadastroSet.php">Cadastrar Setor</a></li>
        <li><a href="cadastroAni.php">Cadastrar Animal</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <!-- Table with PDO -->
    <div>
      <table>
        <!-- <thead> -->
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Setor</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td>1</td>
            <td>Cavaaloooo?</td>
            <td>Equino</td>
            <td>equino</td>
          </tr>
          <tr class="even">
            <td>2</td>
            <td>Baleia</td>
            <td>Mamífero</td>
            <td>aquatico</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Ganso</td>
            <td>Ave</td>
            <td>Gaiola</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
  
</body>
</html>