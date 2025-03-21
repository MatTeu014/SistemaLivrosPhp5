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
    <title>Cadastrar Cliente</title>
</head>
<body style = "background-color: rgb(255,255,0);">


    <h1>Cadastro de Clientes</h1><br>

    <form method = "POST" class = "form-control form-control -sm" style = "background-color: black; color:white;">


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name = "nome">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="telefone" name = "endereco">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
            <input type="text" class="form-control" id="precoTotal" name = "telefone">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Data de Nascimento:</label>
            <input type="text" class="form-control" id="logradouro" name = "dataNacimento">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
            <input type="text" class="form-control" id="numero" name = "email">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Senha:</label>
            <input type="text" class="form-control" id="bairro" name = "senha">
        </div>


        <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:rgb(255,255,0);">Cadastrar<?php

            try{
                if(isset($_POST['nome']) && isset($_POST['endereco']) &&  isset($_POST['telefone']) &&  isset($_POST['dataNascimento']) &&  isset($_POST['email']) &&  isset($_POST['senha']) &&  isset($_POST['situacao']) && $_POST['nome'] != "" && $_POST['endereco'] != "" && $_POST['telefone'] != "" && $_POST['dataNascimento'] != "" && $_POST['email'] != "" && $_POST['senha'] != "" && $_POST['situacao'] != ""){
                    $nome = $_POST['nome'];
                    $endereco = $_POST['endereco'];
                    $telefone = $_POST['telefone'];
                    $dataNacimento = $_POST['dataNacimento'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $situacao = 'ativo';
                }
            }catch(Except $erro){
                echo "Algo deu errado!<br>$erro";
            }
            if(isset($_POST['nome']) && isset($_POST['endereco']) &&  isset($_POST['telefone']) &&  isset($_POST['dataNascimento']) &&  isset($_POST['email']) &&  isset($_POST['senha']) &&  isset($_POST['situacao']) && $_POST['nome'] != "" && $_POST['endereco'] != "" && $_POST['telefone'] != "" && $_POST['dataNascimento'] != "" && $_POST['email'] != "" && $_POST['senha'] != "" && $_POST['situacao'] != ""){
                $inserir->cadastrarCliente($conexao,$nome,$endereco,$telefone,$dataNacimento,$email,$senha,$situacao);
            }
        ?></button>

        

    </form>

    <button style = "border-radius: 10px; margin-left: 2%; background-color: black; margin-top: 1%;"><a href = "TelaPrincipalCrud.php" style = "color:white;">Voltar</a></button>

</body>
</html>
