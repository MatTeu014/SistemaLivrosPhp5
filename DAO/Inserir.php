<?php

namespace PHP\SistemaLivros\DAO;

require_once('Conexao.php');
use PHP\SistemaLivros\DAO\Conexao;

class Inserir{

    public function cadastrarCliente(Conexao $conexao, string $nome, string $endereco, string $telefone, string $dataNascimento, string $email, string $senha, string $situacao){
        try{

            $conn = $conexao->conectar();
            $sql = "insert into cliente(nome,endereco,telefone,dataNascimento,email,senha,situacao)values('$nome','$endereco','$telefone','$dataNascimento','$email','$senha','$situacao')";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if($result){
                return "Cliente Inserido com Sucesso";
            }

            return "<br><br>Cliente não Inserido";

        }catch(Exception $erro){   
            return "<br><br>Algo deu Errado!<br>$erro";

        }//fim do catch

    }//fim do metodo

    public function cadastrarlivro(Conexao $conexao, string $nome, string $autor, string $categoria, int $quantidade, int $preco, string $situacao){
        try{

            $conn = $conexao->conectar();
            $sql = "insert into livro(nome,autor,categoria,quantidade,preco,situacao)values('$nome','$autor','$categoria','$quantidade','$preco','$situacao')";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if($result){
                return "Livro Inserido com Sucesso";
            }

            return "<br><br>Livro não Inserido";

        }catch(Exception $erro){
            return "<br><br>Algo deu Errado!<br>$erro";

        }//fim do catch

    }//fim do metodo

    public function cadastrarCompra(Conexao $conexao, int $codigoLivroFK, int $codigoClienteFK, int $quantidadeLivro, string $formaPagamento, int $precoTotal, string $situacao){
        try{

            $conn = $conexao->conectar();
            $sql = "insert into compra(codigoLivroFK,codigoClienteFK,quantidadeLivro,formaPagamento,precoTotal,situacao)values('$codigoLivroFK','$codigoClienteFK','$quantidadeLivro','$formaPagamento','$precoTotal','$situacao')";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if($result){
                return "Compra Inserida com Sucesso";
            }

            return "<br><br>Compra não Inserida";

        }catch(Exception $erro){   
            return "<br><br>Algo deu Errado!<br>$erro";

        }//fim do catch

    }//fim do metodo

    public function cadastrarCartao(Conexao $conexao, int $numeroCartao, string $situacao){
        try{

            $conn = $conexao->conectar();
            $sql = "insert into cartao(numeroCartao,situacao)values('$numeroCartao','$situacao')";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if($result){
                return "Cartão Inserido com Sucesso";
            }

            return "<br><br>Cartão não Inserido";

        }catch(Exception $erro){   
            return "<br><br>Algo deu Errado!<br>$erro";

        }//fim do catch

    }//fim do metodo

}//fim do class

?>