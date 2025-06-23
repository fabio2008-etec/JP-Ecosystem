<?php
// conexao.php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'jurassicpark');
define('DB_CHARSET', 'utf8mb4');

function conectar(): PDO {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS
    );
    return $pdo;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['especie']) && isset($_POST['altura']) && isset($_POST['dieta']) && isset($_POST['EV'])) {
        $dados = [
            ':especie' => $_POST['especie'],
            ':altura' => $_POST['altura'],
            ':dieta' => $_POST['dieta'],
            ':expectativa_vida' => $_POST['EV']
        ];

        try {
            $pdo = conectar();
            $sql = "INSERT INTO dinossauro (especie, altura, dieta, expectativa_vida)
                    VALUES (:especie, :altura, :dieta, :expectativa_vida)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($dados);

            header("Location: Dino.php?status=sucesso");
            exit;
        } catch (Exception $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
    } else {
        echo "Preencha todos os campos obrigatórios.";
    }
}
