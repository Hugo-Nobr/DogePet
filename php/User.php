<?php
session_start();
class User
{

    private $name;
    private $email;
    private $senha;

    // Setters
    public function setUserName($userName)
    {
        $this->name = $userName;
    }

    public function setUserEmail($userEmail)
    {
        $this->email = $userEmail;
    }

    public function setUserPassword($userPassword)
    {
        $this->senha = $userPassword;
    }



    // Getters
    function getUserName()
    {
        return $this->name;
    }

    function getUserEmail()
    {
        return $this->email;
    }

    function getUserPassword()
    {
        return $this->senha;
    }



    function cadastrarUsuario($conexao)
    {
        try {
            // Verifica se o usuário já existe no banco de dados
            $query = "SELECT COUNT(*) FROM Users WHERE email = :email";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();

            if ($stmt->fetchColumn() > 0) {
                // Usuário já cadastrado
                return false;
            }

            // Insere o novo usuário no banco de dados
            $query = "INSERT INTO Users (name, email, senha) VALUES (:nome, :email, :senha)";
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':nome', $this->name);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->execute();


            // Cadastro bem-sucedido
            return true;
        } catch (PDOException $e) {
            die("Erro ao cadastrar usuário: " . $e->getMessage());
        }
    }


    function logar($conexao)
    {
        // Consulta para verificar o login
        $query = "SELECT * FROM Users WHERE email = :email AND senha = :senha";
    
        try {
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->execute();
            
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if (count($rows) > 0) {
                $row = $rows[0];
                
                $_SESSION["name"] = $row["name"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["carrinho"] = [];
                
                return true; 
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die("Erro na consulta: " . $e->getMessage());
        }
    }
    
    
    
    
    
    

    


    function updateUser($conexao)
    {
        $sql = "UPDATE Users SET name = :nome, email = :email, senha = :senha WHERE email = :email";

        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->name);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);

        return $stmt->execute();
    }

}