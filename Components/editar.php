<?php
require 'conexao.php';

if (!isset($_GET['id'])) {
    echo "ID não informado.";
    exit;
}

$pdo = conectar();
$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM dinossauro WHERE id = ?");
$stmt->execute([$id]);
$dino = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$dino) {
    echo "Dinossauro não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Dinossauro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-dark text-light">
  <div class="container mt-5">
    <h2>Editar Dinossauro</h2>
    <form action="atualizar.php" method="POST">
      <input type="hidden" name="id" value="<?= $dino['id'] ?>">
      
      <div class="mb-3">
        <label>Espécie</label>
        <input type="text" name="especie" class="form-control" value="<?= $dino['especie'] ?>">
      </div>
      <div class="mb-3">
        <label>Altura</label>
        <input type="text" name="altura" class="form-control" value="<?= $dino['altura'] ?>">
      </div>
      <div class="mb-3">
        <label>Dieta</label>
        <input type="text" name="dieta" class="form-control" value="<?= $dino['dieta'] ?>">
      </div>
      <div class="mb-3">
        <label>Expectativa de Vida</label>
        <input type="text" name="EV" class="form-control" value="<?= $dino['expectativa_vida'] ?>">
      </div>
      <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
  </div>
</body>
</html>
