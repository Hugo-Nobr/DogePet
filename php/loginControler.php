<?php

    include "conexao.php";
    include "User.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaC = md5($senha);

    $user = new User();
    $user->setUserEmail($email);
    $user->setUserPassword($senhaC);
    $resultado = $user->logar($conexao);

    if($resultado){
        header('Location: ../index.php');

    }else{
        $mensagem = "Usuario ou senha inválidos!";
        header("Location: ../login.php?mensagem=" . urlencode($mensagem));
    }