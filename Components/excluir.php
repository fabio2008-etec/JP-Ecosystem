<?php
require 'conexao.php'; // ou copie a função conectar()

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $pdo = conectar();
        $stmt = $pdo->prepare("DELETE FROM dinossauro WHERE id = ?");
        $stmt->execute([$id]);

        header("Location: Dino.php?status=excluido");
        exit;
    } catch (Exception $e) {
        echo "Erro ao excluir: " . $e->getMessage();
    }
} else {
    echo "ID não especificado.";
}
