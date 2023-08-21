<?php
include("conexao.php");
if (isset($_POST['bt_login'])) {

    

    $id_login_alterar = $_POST['bt_id_alterar'];
    $login = $_POST['bt_login'];
    $senha = $_POST['bt_senha'];

    $sql_alterar = "UPDATE tabela_login
    SET login = '$login', 
    senha = '$senha'
    WHERE id_login = '$id_login_alterar'";

    $mysqli_alterar = $mysqli->query($sql_alterar) or die($mysqli->error);
   // unset($_POST['bt_login']);

    //var_dump( $id_login_alterar);
}

if (isset($_POST['bt_id'])) {
    $id_login = $_POST['bt_id'];
    $sql_consultar = "SELECT * FROM tabela_login WHERE id_login= '$id_login'";
    $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
    $consultar = $mysqli_consultar->fetch_assoc();
    //unset($_POST['bt_id']);
}







?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão - Consultar, Alterar e Deletar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center"> Revisão - Consultar, Alterar e Deletar</h1>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-4">
                <form action="" method="post">
                    <div class="mb-3">
                        
                        <br>
                        <br>
                        <br>
                        <label class="form-label" for="">Digite o ID do login para alteração:</label>
                        <input class="form-control" type="text" name="bt_id">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Consultar">
                    
                </form>
            </div>
            <div class="col-4">
                <form action="" method="post">
                    <div class="mb-3">
                        
                        <input type="hidden" name="bt_id_alterar" value="<?php if(isset($consultar['id_login'])){echo $consultar['id_login'];}?>"> 
                        <label class="form-label" for="">Login</label>  
                        <input class="form-control" type="text" name="bt_login" value="<?php
                        if(isset($consultar['login'])){
                            echo $consultar['login']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Senha</label>
                        <input class="form-control" type="text" name="bt_senha" value="<?php
                        if(isset($consultar['senha'])){
                            echo $consultar['senha']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        
                        
                        ?>">
                    </div>

                    <input class="btn btn-warning" type="submit" value="Alterar"> 
                    <a class="btn btn-danger" href="deletar.php?id_deletar=<?php if(isset($_POST['bt_id'])){echo $_POST['bt_id'];}?>">Deletar</a>
                    <a class="btn btn-primary" href="cadastro.php">Voltar</a>
                </form>
            </div>
        </div>
        <div class="col-4">

        </div>



    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>