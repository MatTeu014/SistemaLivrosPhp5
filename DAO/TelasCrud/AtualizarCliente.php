<?php
    namespace PHP\SistemaLivros\Telas;
    
    require_once('../Conexao.php');
    require_once('../Atualizar.php');

    use PHP\SistemaLivros\DAO\Conexao;
    use PHP\SistemaLivros\DAO\Atualizar;

    $conexao = new Conexao();//Acessar a classe conexao
    $atualizar = new Atualizar();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Atualizar Cliente</title>
    </head>
    <body style = "background-color: rgb(255,255,0);">


        <h1>Atualizar Cliente</h1><br>

        <form method = "POST" class = "form-control form-control -sm" style = "background-color: black; color:white;">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Código do Cliente:</label>
                <input type="text" class="form-control" id="cpf" name = "codigoClientePK">
            </div>

            <br>
            
            <select name = "campos" class="form-select" aria-label="Default select example">
                <option selected>Escolha um Campo para Atualizar</option>
                <option value="nome">Nome</option>
                <option value="endereco">Endereço</option>
                <option value="telefone">Telefone</option>
                <option value="dataNascimento">Data de Nascimento</option>
                <option value="email">E-mail</option>
                <option value="senha">Senha</option>
                <option value="situacao">Situação</option>
            </select>

            <br>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Novo Dado:</label>
                <input type="text" class="form-control" id="novoDado" name = "novoDado">
            </div>

            <button type = "submit" style = "border-radius: 10px; margin-left: 0.5%;background-color:rgb(255,255,0);">Atualizar

                <?php
                if(isset($_POST['nome']) && isset($_POST['endereco']) &&  isset($_POST['telefone']) &&  isset($_POST['dataNascimento']) &&  isset($_POST['email']) &&  isset($_POST['senha']) &&  isset($_POST['situacao']) && $_POST['nome'] != "" && $_POST['endereco'] != "" && $_POST['telefone'] != "" && $_POST['dataNascimento'] != "" && $_POST['email'] != "" && $_POST['senha'] != "" && $_POST['situacao'] != ""){
                    $atualizar->atualizarCliente($conexao,$_POST['campos'],$_POST['novoDado'],$_POST['codigoClientePK']);
                }
                ?>

            </button>

        </form>

        <button style = "border-radius: 10px; margin-left: 2%; background-color: black; margin-top: 1%;"><a href = "TelaPrincipalCrud.php" style = "color:white;">Voltar</a></button>

    </body>
</html>