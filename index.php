<?php
  session_start();


?>



<!DOCTYPE html>
<html lang="pt/br">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css" type="text/css">
  <title>DogePet</title>

</head>

<body>

<?php 


?>
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



  <div class="carousel">
    <input type="radio" id="slide1" name="slides" checked>
    <input type="radio" id="slide2" name="slides">
    <input type="radio" id="slide3" name="slides">
    <div class="slides">
      <div class="slide">

        <h2 style="margin-left: -8%;">Quem Somos?</h2>
        <h4 style="margin-left: -8%;">a DogePet é um Petshop especializado em cuidar dos seus bichinhos!<br>Temos tudo
          que você precisa para cuidar desses animais.</h4>
        <input style="margin-left: -8%;" type="button" value="Ver Mais" onclick="location.href='#'">
        <img src=".//images/dog-583007.webp" alt="slide1">

      </div>
      <div class="slide">


        <h2 style="margin-left: 5%;">A melhor ração, para sua melhor companhia!</h2>
        <h4 style="margin-left: 5%;">Rações a partir de R$150</h4>
        <input style="margin-left: 5%;" type="button" value="Ver Mais">

        <img src=".//images/new-dog-gallery-choosing-a-name-istockphoto-184129038.jpg" alt="slide2">

      </div>
      <div class="slide">
        <h2 style="margin-left: -100px;">Os melhores preços para os nossos melhores amigos!</h2>
        <h4 style="margin-left: -100px;">Casinhas com até 50% de desconto para não deixar seu amigo na mão</h4>
        <img src=".//images/tw-pet-care.jpg" alt="slide3">
        <input style="margin-left: -100px;" type="button" value="Ver Mais">

      </div>
    </div>
    <div class="navigation">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
    </div>
  </div>

<?php
  $imgProdutos = [
    
    ["nomeImagem" => "casinha1.webp", "valor" => 150, "descricao" => "Casinha para cachorros grandes",  "nome" => "Casinha grande"],
    ["nomeImagem" => "casinha2.jpg", "valor" => 340,  "descricao" => "Casinha para cachorros pequenos", "nome" => "Casinha pequena"],
    ["nomeImagem" => "casinha3.webp", "valor" => 299, "descricao" => "Casinha para chorros",            "nome" => "Casinha chorros"],
    ["nomeImagem" => "racao1.webp", "valor" => 150, "descricao" => "Racao para cachorro grande", "nome" => "Racao grande"],
    ["nomeImagem" => "racao2.webp", "valor" => 120, "descricao" => "Racao para cachorro pequenoc", "nome" => "Racao pequena"],
    ["nomeImagem" => "brinquedo.jpg", "valor" => 110, "descricao" => "Brinquedo para cachorro", "nome" => "Brinquedo"],
    ["nomeImagem" => "brinquedo2.webp", "valor" => 130, "descricao" => "Brinquedo para cachorro pequeno", "nome" => "Brinquedo"],
    ["nomeImagem" => "casinha1.webp", "valor" => 150, "descricao" => "Casinha para cachorros grandes",  "nome" => "Casinha pequena"],
    ["nomeImagem" => "chorro.webp", "valor" => 299, "descricao" => "Brinquedo feio",  "nome" => "Brinquedo animal"]

  ];

  $coluna = 1;

  foreach ($imgProdutos as $produto) {
    if ($coluna === 1) {
      echo '<div class="card-container">';
    }
?>

  <form action="php/carrinhoControler.php" method="POST">
      <div class="card">
        <div class="card-header">
          <h2><?= $produto["nome"]?></h2>
        </div>
        <div class="card-body">
          <p><img src="./images/<?= $produto["nomeImagem"]?>"></p>
          <h4><?= $produto["descricao"]?></h4>
          <h5>Apenas R$<?= $produto["valor"]?></h5>
        </div>
        <div class="card-footer">
          <input type="hidden" name="nome_produto" value="Ração Premium Cachorro">
          <input type="hidden" name="valor" value="<?= $produto["valor"]?>">
          <input type="submit" value="Comprar">
        </div>
      </div>
    </form>
    <?php
    $coluna++;

    if ($coluna > 3) {
      echo '</div>';
      $coluna = 1;
    }
  }

  if ($coluna !== 1) {
    echo '</div>';
  }
?>

<?php
  
  

?>



</body>

</html>