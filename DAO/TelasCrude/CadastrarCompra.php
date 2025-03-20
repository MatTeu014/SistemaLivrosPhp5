<?php
    namespace PHP\SistemaLivros\Telas;
    
    require_once('../Conexao.php');
    require_once('../Inserir.php');
    require_once('../Consultar.php');

    use PHP\SistemaLivros\DAO\Conexao;
    use PHP\SistemaLivros\DAO\Inserir;
    use PHP\SistemaLivros\DAO\Consultar;

    $conexao = new Conexao();//Acessar a classe conexao
    $inserir = new Inserir();//
    $consultar = new Consultar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cadastrar Compra</title>
</head>
<body>


    <h1>Cadastro de Compras</h1><br>

    <form method = "POST" class = "form-control form-control -sm">


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Código do Livro:</label>
            <input type="text" class="form-control" id="nome" name = "codigoLivroFK">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Código do Cliente:</label>
            <input type="text" class="form-control" id="telefone" name = "codigoClienteFK">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantidade de Livros:</label>
            <input type="text" class="form-control" id="precoTotal" name = "quantidadeLivro">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Forma de Pagamento:</label>
            <input type="text" class="form-control" id="logradouro" name = "formaPagamento">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Preço Total:</label>
            <input type="text" class="form-control" id="numero" name = "precoTotal">
        </div>


        <button type = "submit">Cadastrar<?php

            try{
                $codigoLivroFK = $_POST['codigoLivroFK'];
                $codigoClienteFK = $_POST['codigoClienteFK'];
                $quantidadeLivro = $_POST['quantidadeLivro'];
                $formaPagamento = $_POST['formaPagamento'];
                $precoTotal = $_POST['precoTotal'];
                $situacao = "ativo";
            }catch(Except $erro){
                echo "Algo deu errado!<br>$erro";
            }

            $inserir->cadastrarCompra($conexao,$codigoLivroFK,$codigoClienteFK,$quantidadeLivro,$formaPagamento,$precoTotal,$situacao);
            
        ?></button>

        

    </form>



</body>
</html>
