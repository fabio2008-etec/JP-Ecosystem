<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $especie = $_POST['especie'] ?? '';
    $altura = $_POST['altura'] ?? '';
    $dieta = $_POST['dieta'] ?? '';
    $EV = $_POST['EV'] ?? '';

    if ($id && $especie && $altura && $dieta && $EV) {
        try {
            $pdo = conectar();
            $sql = "UPDATE dinossauro SET especie = :especie, altura = :altura, dieta = :dieta, expectativa_vida = :ev WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':especie' => $especie,
                ':altura' => $altura,
                ':dieta' => $dieta,
                ':ev' => $EV,
                ':id' => $id
            ]);
            header("Location: Dino.php?status=editado");
            exit;
        } catch (Exception $e) {
            echo "Erro ao atualizar: " . $e->getMessage();
        }
    } else {
        echo "Todos os campos são obrigatórios.";
    }
}
