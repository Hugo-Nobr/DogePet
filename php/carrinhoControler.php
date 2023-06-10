<?php

session_start();
$nomeProduto = $_POST["nome_produto"];
$preco = $_POST['valor'];
$produto = ["nomeProduto" => $nomeProduto, "preco" => $preco];
array_push($_SESSION["carrinho"], $produto);
// var_dump($produto);

header("Location: ../");
//var_dump($_SESSION['carrinho']);

