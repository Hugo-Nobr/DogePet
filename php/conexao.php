<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "getpet";

    try {
        $conexao = new PDO("mysql:host=$host;dbname=$db", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro: Falha ao conectar-se com o banco de dados MySQL: " . $e->getMessage();
        exit;
    }
?>