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
        <title>Consultar Livro</title>
    </head>

    <body style = "background-color: rgb(255,255,0);">
    
        <h1>Telas Crud</h1><br>



            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "ConsultarLivro.php" style = "color:white">Consultar Livro</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "ConsultarCompra.php"style = "color:white">Consultar Compra</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "ConsultarCliente.php"style = "color:white">Consultar Cliente</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;">C<a href= "ConsultarCartao.php"style = "color:white">Consultar Cartao</a><?php
            ?></button>

            <br><br><button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "CadastrarLivro.php" style = "color:white">Cadastrar Livro</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "CadastrarCompra.php"style = "color:white">Cadastrar Compra</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "CadastrarCliente.php"style = "color:white">Cadastrar Cliente</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;">C<a href= "CadastrarCartao.php"style = "color:white">Cadastrar Cartao</a><?php
            ?></button>

            <br><br><button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "AtualizarLivro.php" style = "color:white">Atualizar Livro</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "AtualizarCompra.php"style = "color:white">Atualizar Compra</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;"><a href= "AtualizarCliente.php"style = "color:white">Atualizar Cliente</a><?php
            ?></button>
            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:black;">C<a href= "AtualizarCartao.php"style = "color:white">Atualizar Cartao</a><?php
            ?></button> 

            



            <br><button style = "border-radius: 10px; margin-left: 2%; background-color: black; margin-top: 1%;"><a href = "../../Telas/TelaPrincipal.php" style = "color:white;">Voltar</a></button>

        <?php
            if(isset($_POST['nome']) && isset($_POST['autor']) &&  isset($_POST['categoria']) &&  isset($_POST['quantidade']) &&  isset($_POST['preco']) &&  isset($_POST['situacao']) && $_POST['nome'] != "" && $_POST['autor'] != "" && $_POST['categoria'] != "" && $_POST['quantidade'] != "" && $_POST['preco'] != "" && $_POST['situacao'] != ""){
                $consultar->consultarLivro($conexao,$_POST['codigolivroPK']);
            }
        ?>
       
    </body>     

</html>