<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/stylesCadastro.css" type="text/css">
  <title>Cadastro</title>

</head>
<body>

<script>
    function verificarSenhas() {
        var senha1 = document.getElementById("senha").value;
        var senha2 = document.getElementById("senhaConfirma").value;

        if (senha1 === senha2) {
            // As senhas coincidem
            return true;
        } else {
            // As senhas não coincidem
            alert("As senhas não coincidem!");
            return false;
        }
    }
</script>


<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 text-center">
            <h1 class='text-black'>GetPet</h1>
            <div class="form-login"></br>
                <h4>Cadastro</h4>
                <form id="cadastro" action="./php/cadastrarControler.php" method="POST" onsubmit="return verificarSenhas()">

                    </br>
                    <input type="text" id="name" name="name" class="form-control input-sm chat-input" placeholder="Nome"/>
                    </br></br>
                    <input type="email" id="email" name="email" placeholder="E-mail"/>
                    </br></br>
                    <input type="password" id="senha" name="senha" class="form-control input-sm chat-input" placeholder="Senha"/>
                    </br></br>
                    <input type="password" id="senhaConfirma" name="senhaConfirma" class="form-control input-sm chat-input" placeholder="Confirmar Senha"/>
                    </br></br>
                    <?php
                    
                    if(isset($_GET["mensagem"])){

                        echo $mensagem = $_GET["mensagem"] . "<br>";

                    }else{
                    
                        echo "Já possui conta?<a href='login.php'>Clique Aqui</a>";
                        
                    }
                    
                    
                    ?>
                    
                    <div class="wrapper">
                        <span class="group-btn">
                            <button type="submit" class="btn btn-danger btn-md">Cadastrar <i class="fa fa-sign-in"></i></button>
                        </span>
                    </div>
                    

                </form>
            </div>
        </div>
    </div> 
</div>
</body>
</html>
