<?php
    include("conexao.php");
    require("autenticacao.php");
    $sql_consultar = "SELECT * FROM tabela_login";

    $consulta = $mysqli->query( $sql_consultar) or die($mysqli->error);
    $quantidade_login = $consulta->num_rows; // Retornar quantidade de linhas

?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultar Logins</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Consultar Logins</h1>
            <table class="table table-striped">
            <tr>
                <th>Id do Login</th>
                <th>Login</th>
                <th>Senha</th>
            </tr>

                <?php
                    while ($logins = $consulta -> fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $logins['id_login']; ?></td>
                    <td><?php echo $logins['login']; ?></td>
                    <td><?php echo $logins['senha']; ?></td>
                   
                    
                </tr>
                <?php
                    }
                
                ?>
            
        </table>
        <a class="btn btn-warning" href="index.php">Voltar</a>
        </div> 
    </body>
</html>