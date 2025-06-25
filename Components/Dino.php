<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'jurassicpark');
define('DB_CHARSET', 'utf8mb4');

function conectar(): PDO
{
  return new PDO(
    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
    DB_USER,
    DB_PASS
  );
}

$pdo = conectar();
$stmt = $pdo->query("SELECT * FROM dinossauro");
$dinossauros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Dinossauros Cadastrados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body {
    background-color: black;
    color: white;
    font-family: 'Impact', 'Arial Black', sans-serif;
  }

  .header {
    text-align: center;
    margin-top: 30px;
  }

  .titulo-img {
    width: 500px;
    height: auto;
  }

  .faixa-vermelha {
    background-color: #a50f10;
    width: 1500px;
    min-height: 120%;
    margin-bottom: 10px;
    position: absolute;
    z-index: -4;
    left: 200px;
  }

  .titulo {
    color: red;
    font-size: 70px;
    text-shadow: 2px 2px 4px #000;
    margin-bottom: 500px;
    position: absolute;
    top: 100px;
  }

  .tabela-dino {
    position: absolute;
    top: 200px;
    border: 2px solid #ffde59;
    border-radius: 5px;
    width: 1280px;
  }

  .tabela-dino th {
    background-color: black;
    color: #ffde59;
    font-size: 1.3rem;
    font-family: monospace;
  }

  .tabela-dino td {
    background-color: #ffde59;
    opacity: 0.8;
    color: black;
    font-size: 1.1rem;
    border-color: #ffde59;

  }

  .tabela-dino tr:hover td {
    background-color: black;
    color: white;
    transition: background-color 0.3s ease;
  }

  .LogoImg {
    position: absolute;
    left: 300px;
    top: 200px;

  }
</style>
</head>

<body class="bg-dark text-light">

  <img src="../img/Jurassic Park.png" alt="" class="LogoImg">

  <div class="faixa-vermelha"></div>

  <div class="container mt-5">

    <h1 class="text-center titulo">Dinossauros no Parque</h1>

    <table class="table table-bordered table-hover tabela-dino">
      <thead class="table-danger text-center">
        <tr>
          <th>ID</th>
          <th>Espécie</th>
          <th>Altura</th>
          <th>Dieta</th>
          <th>Expectativa de Vida</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($dinossauros as $dino) : ?>
          <tr class="text-center">
            <td><?= $dino['id'] ?></td>
            <td><?= $dino['especie'] ?></td>
            <td><?= $dino['altura'] ?></td>
            <td><?= $dino['dieta'] ?></td>
            <td><?= $dino['expectativa_vida'] ?></td>
            <td>

              <a href="excluir.php?id=<?= $dino['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

  </div>

</body>

</html>