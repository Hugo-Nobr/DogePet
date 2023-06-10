<?php
    session_start();
    if(!isset($_SESSION["name"])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt/br">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
    <title>DogePet</title>
</head>

<body>
    <nav class="navbar">
    <a href="index.php" style="border-radius: 50%;" class="logo"><img class="icon" src="./images/doge.gif"></a>
    <a href="index.php" class="logo"><h2 style="color:white;">GetPet</h2></a>
      <tr>
        <td><a href="perfil.php"><img class="cart" src="./images/profile.png"></a></td>
        <td><a href="carrinho.php" class="acard"><img class="cart" src="./images/cart.png" /></a></td>
        <td><a href="./php/deslogar.php" class="acard"><img class="cart" src="./images/logout-24.png" /></a></td>
      </tr>
    </table>

  </nav>

<?php
    if(isset($_SESSION["email"])){
?>
        <div>
            <div class="perfil">
                <h1><?= $_SESSION["name"]?></h1>
                <img src="images/doge.gif" alt="Profile Picture">

                <br>
                <ul>
                    <li><strong>Email:</strong> <?= $_SESSION["email"]?></li>
                    <li><strong>Telefone:</strong> 9999-9999</li>
                    <li><strong>Endereço</strong> dasdasd</li>
                </ul>
            </div>
        </div>

<?php

    }
?>

    </body>
</html>