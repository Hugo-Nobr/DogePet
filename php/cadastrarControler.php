<?php

    include 'conexao.php';
    include 'User.php';
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

   
    $senhaC = md5($senha);
    $user = new User();
    $user->setUserName($name);
    $user->setUserEmail($email);
    $user->setUserPassword($senhaC);

    $resultado = $user->cadastrarUsuario($conexao);


    if($resultado){

        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["carrinho"] = [];
        header('Location: ../index.php');

    }else{
        $mensagem = "Usuário já cadastrado";
        header("Location: ../register.php?mensagem=" . urlencode($mensagem));

    }

    