<?php

    include 'conexao.php';
    include 'User.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senhaC = md5($senha);
    $user = new User();
    $resultado = $user->updateUser($conexao);

    header('Location: ../index.php');