<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'jurassicpark');
define('DB_CHARSET', 'utf8mb4');

function conectar(): PDO {
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
</head>
<body class="bg-dark text-light">

  <div class="header">
    <img src="../img/Jurassic Park (15).png" alt="Título" class="titulo-img">
  </div>

  <div class="container mt-5">
    <div class="faixa-vermelha"></div>

    <h1 class="text-center titulo">Dinossauros no Parque</h1>

    <table class="table table-bordered table-hover tabela-dino">
      <thead class="table-danger text-center">
        <tr>
          <th>ID</th>
          <th>Espécie</th>
          <th>Altura</th>
          <th>Dieta</th>
          <th>Expectativa de Vida</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($dinossauros as $dino): ?>
        <tr class="text-center">
          <td><?= $dino['id'] ?></td>
          <td><?= $dino['especie'] ?></td>
          <td><?= $dino['altura'] ?></td>
          <td><?= $dino['dieta'] ?></td>
          <td><?= $dino['expectativa_vida'] ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

</body>
</html>

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
  width: 100%;
  height: 25px;
  margin-bottom: 40px;
}

.titulo {
  color: #ffde59;
  font-size: 3rem;
  text-shadow: 2px 2px 4px #000;
  margin-bottom: 30px;
}

.tabela-dino {
  background-color: #1a1a1a;
  border: 2px solid #ffde59;
  border-radius: 5px;
}

.tabela-dino th {
  background-color: #a50f10;
  color: #fff;
  font-size: 1.3rem;
}

.tabela-dino td {
  background-color: #2b2b2b;
  color: #eee;
  font-size: 1.1rem;
  border-color: #ffde59;
}

.tabela-dino tr:hover td {
  background-color: #440000;
  transition: background-color 0.3s ease;
}
</style>
