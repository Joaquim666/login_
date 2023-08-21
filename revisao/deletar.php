<?php
include("conexao.php");

if(isset($_GET['id_deletar'])){
    $id_deletar = $_GET['id_deletar'];
    $sql_consultar = "SELECT * FROM tabela_login WHERE id_login = '$id_deletar'";
    $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
    $deletar = $comando_sql->fetch_assoc();

    if (isset($_POST['btn_deletar'])) {

        $sql_deletar = "DELETE FROM tabela_login WHERE id_login = '$id_deletar'";

        $deu_certo = $mysqli->query($sql_deletar) or die($mysqli->error);

        header("location:alterar.php");
        // var_dump($mysqli);
    }
} else {
    echo "Não tem código de consulta disponível";
}



?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Deseja deletar o dados abaixos: </h1>
            <h3>ID Login: <?php echo $deletar['id_login']?></h3>
            <h3>Login: <?php echo $deletar['login']?></h3>
            <h3>Senha: <?php echo $deletar['senha']?></h3>

            

            <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="DELETAR">
                <a class="btn btn-primary" href="alterar.php">Voltar</a>
            </form>
        </div>
    </body>
</html>