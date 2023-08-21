<?php
    include("conexao.php");
    if (isset($_POST['bt_nome'])) {
        $nome = $_POST['bt_nome'];
        //$senha = $_POST['bt_senha'];

        $senha = password_hash ($_POST['bt_senha'], PASSWORD_DEFAULT);

        $mysqli->query("INSERT INTO tabela_login (login, senha)
        values ('$nome', '$senha')")
        or die($mysqli->error);
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
                        <h1 class="text-center"> Para Fazer - Revisão - Cadastrar</h1>
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