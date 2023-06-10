<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./styles/styles.css" type="text/css">
<link rel="stylesheet" href="./styles/stylesCart.css" type="text/css">

<body>
<?php
session_start();
if (!isset($_SESSION['name'])) {
  header("Location: login.php"); // Redireciona para a página de login
  exit();
}
?>
  <nav class="navbar">
    <a href="home.php" style="border-radius: 50%;" class="logo"><img class="icon" src="./images/doge.gif"></a>
    <table>
      <tr>
        <td><a href="perfil.php"><img class="cart" src="./images/profile.png"></a></td>
        <td><a href="carrinho.php" class="acard"><img class="cart" src="./images/cart.png" /></a></td>
        <td><a href="./php/deslogar.php" class="acard"><img class="cart" src="./images/logout-24.png" /></a></td>
      </tr>
    </table>

  </nav>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
<?php
            $total = 0;
            foreach($_SESSION["carrinho"] as $produto) { 
                $total += $produto["preco"];
?>
                <tr>
                    <td><?= $produto["nomeProduto"]; ?></td>
                    <td><?= $produto["preco"]; ?></td>
                </tr>
<?php 
    } 
?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Frete</td>
                    <td>$30</td>
                </tr>
                <tr>
                    <td colspan="3">Total</td>
                    <td>R$<?= $total?></td>
                </tr>
            </tfoot>
        </table>
    </main>

</body>
</html>