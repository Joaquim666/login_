<?php
 

 include("conexao.php");
 session_start(); // Inicie a sessão aqui no topo do seu script
 

 if (isset($_POST['bt_login'])) {
     $login = $_POST['bt_login'];
     $senha = $_POST['bt_senha'];
 
     // Usando prepared statements para evitar SQL Injection
     $stmt = $mysqli->prepare("SELECT * FROM tabela_login WHERE login = ? LIMIT 1");
     $stmt->bind_param("s", $login);
     $stmt->execute();
     $result = $stmt->get_result();
     $usuario = $result->fetch_assoc();
    
     
     // Verificar se o usuário existe
      if (!$usuario) {
         echo "<script>alert('login ou senha incorreto!!');</script>";
         header("Location: index.php");
         exit();
     }

     
 
     // Verificar a senha
     if (password_verify($senha, $usuario['senha'])) {
         $_SESSION['login_nome'] = $usuario['id_login'];
         //var_dump( $usuario);
         header("Location: consultar.php");
        exit();
     } else {
         echo "Usuário não autenticado";
     }
 }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão - Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-4">
               
            </div>
            <div class="col-4">
                <form action="" method="post">
                    <div class="mb-3">
                        <h1 class="text-center">Fazer Login </h1>
                        <label class="form-label" for="">Login</label>
                        <input class="form-control" type="text" name="bt_nome">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Senha</label>
                        <input class="form-control" type="text" name="bt_senha">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Cadastrar">
                    <input class="btn btn-danger" type="reset">
                </form>
            </div>
        </div>
        <div class="col-4">

        </div>



    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>