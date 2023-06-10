<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/stylesLogin.css" type="text/css">
  <title>Login</title>

</head>
<body>



<div class="container">
    <div class="row">
        <div>
            <h1>GetPet</h1>
            <h4>Login</h4>
            <?php

                session_start();
                
                if(isset($_SESSION['name'])){
                    header('Location: ./Perfil.php');
                }


                
                if(isset($_GET['mensagem'])){
                   $mensagem = $_GET['mensagem'];
                    echo "<h4>" . $mensagem . "</h4>";
                }
            
            
            ?>
              <form action="./php/loginControler.php" method="POST" class="form-login">
                    <input type="email" name="email" placeholder="E-mail"/>
                    <input type="password" name="senha" placeholder="Senha"/>

                    <h4>Não possui conta?<a href="register.php">Clique aqui</a></h4>
                    <div>
                            <span>
                                <button type="submit">Login</button>
                            </span>
                    </div>
                </form>
        </div>
    </div> 
</div>
</body>
</html>