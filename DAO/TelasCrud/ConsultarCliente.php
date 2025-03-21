<?php
    namespace PHP\SistemaLivros\Telas;

    require_once('../Conexao.php');
    require_once('../Consultar.php');

    use PHP\SistemaLivros\DAO\Conexao;    
    use PHP\SistemaLivros\DAO\Consultar;

    $conexao = new Conexao();
    $consultar = new Consultar();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Consultar Cliente</title>
    </head>

    <body style = "background-color: rgb(255,255,0);">
    
        <h1>Consultar Cliente</h1><br>

        <form method = "POST" class = "form-control form-control -sm" style = "background-color: black; color:white;">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Código do Cliente:</label>
                <input type="text" class="form-control" id="cpf" name = "codigoClientePK">
            </div>

            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:rgb(255,255,0);">Consultar<?php
            ?></button>

        </form>

        <button style = "border-radius: 10px; margin-left: 2%; background-color: black; margin-top: 1%;"><a href = "TelaPrincipalCrud.php" style = "color:white;">Voltar</a></button>

        <?php
            if(isset($_POST['codigoClientePK']) && $_POST['codigoClientePK'] != ""){
                $consultar->consultarCliente($conexao,$_POST['codigoClientePK']);
            }
        ?>

            

    </body>     

</html>