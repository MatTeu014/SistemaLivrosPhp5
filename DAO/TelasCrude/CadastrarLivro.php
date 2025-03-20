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
    <title>Cadastrar Livro</title>
</head>
<body>


    <h1>Cadastro de Livros</h1><br>

    <form method = "POST" class = "form-control form-control -sm">


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name = "nome">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Autor:</label>
            <input type="text" class="form-control" id="telefone" name = "autor">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Categoria:</label>
            <input type="text" class="form-control" id="precoTotal" name = "categoria">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantidade:</label>
            <input type="text" class="form-control" id="logradouro" name = "quantidade">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Preço:</label>
            <input type="text" class="form-control" id="numero" name = "preco">
        </div>


        <button type = "submit">Cadastrar<?php

            try{
                $nome = $_POST['nome'];
                $autor = $_POST['autor'];
                $categoria = $_POST['categoria'];
                $quantidade = $_POST['quantidade'];
                $preco = $_POST['preco'];
                $situacao = "ativo";
            }catch(Except $erro){
                echo "Algo deu errado!<br>$erro";
            }

            $inserir->cadastrarLivro($conexao,$nome,$autor,$categoria,$quantidade,$preco,$situacao);
            
        ?></button>

        

    </form>



</body>
</html>
