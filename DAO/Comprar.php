<?php

namespace PHP\SistemaLivros\DAO;

require_once('Conexao.php');
require_once('Autenticar.php');
use PHP\SistemaLivros\DAO\Conexao;
use PHP\SistemaLivros\DAO\Autenticar;

$consultarCliente = new Autenticar();

class Comprar{

    public function inserirCompra(Conexao $conexao, int $codigoLivroFK, int $codigoClienteFK, int $quantidadeLivro, string $formaPagamento, int $precoTotal){

        try{

            $conn = $conexao->conectar();//Abrir a conexao
            $sql = "insert into compra(codigoLivroFK,codigoClienteFK,quantidadeLivro,formaPagamento,precoTotal) values('$codigoLivroFK','$codigoClienteFK','$telefone','$quantidadeLivro','$formaPagamentol','$precoTotal')";
            $result = mysqli_query($conn,$sql);//Executo o comando
            mysqli_close($conn);//Fechar a porta do banco de dados

            if($result){
                header('Location:TelaLogado.php');
                return "<br><br>Inserido com sucesso!";
            }

            return "<br><br>Não Inserido";

        }catch(Exception $erro){
            return "<br><br>Algo deu Errado!".$erro;

        }//fim do catch


    }//fim do metodo

    public function consultarLivro(Conexao $conexao, string $nome){

        $conn = $conexao->conectar();
        $sql = "select * from livro where nome = '$nome'";
        $result = mysqli_query($conn,$sql);

        try{
            while($dados = mysqli_fetch_Array($result)){
    
                if($dados['nome'] == $nome){
                    echo "<br>Título: ".$dados['nome']."<br>Autor: ".$dados['autor']."<br>Categoria:".$dados['categoria']."<br>Quantidade: ".$dados['quantidade']."<br>Preço: R$".$dados['preco'];
                    return;
                }
            }
        }catch(Exception $erro){
            echo "Algo deu errado!". $erro;
        }
    }

    public function alterarQuantidadeLivro(Conexao $conexao, string $nome, int $quantidade){

 
        try{
            $conn = $conexao->conectar();

            $sql = "update livro set quantidade = quantidade - $quantidade where nome = '$nome'";
            $result = mysqli_query($conn,$sql); 

        }catch(Exception $erro){
            return "Algo deu errado!".$erro;
        }
    
    }

    public function inserirCodigoLivroCompra(Conexao $conexao, string $nomeLivro){

        try{
            $conn = $conexao->conectar();
            $sql = "insert into compra (codigolivroFK) select codigoLivroPK from livro where nome = '$nomeLivro'";
            $result = mysqli_query($conn,$sql); 
             
            
        }catch(Exception $erro){
            return "Algo deu errado!".$erro;
        }
    }

    public function inserirCodigoClienteCompra(Conexao $conexao, string $email){
        try{


            $conn = $conexao->conectar();

            $sql = "update compra set codigoClienteFK = ( select codigoClientePK from cliente where email = '$email') order by codigoCompraPK desc limit 1";

            $result = mysqli_query($conn,$sql); 

        }catch(Exception $erro){
            return "Algo deu errado!".$erro;
        }
    }

    public function quantidadeLivroCompra(Conexao $conexao,int $quantidade){
        try{
            $conn = $conexao->conectar();
            $sql = "update compra set quantidadeLivro = $quantidade order by codigoCompraPK desc limit 1;";
            $result = mysqli_query($conn,$sql); 
             
            
        }catch(Exception $erro){
            return "Algo deu errado!".$erro;
        }
    }

    public function formaPagamento(Conexao $conexao, string $forma){
        try{
            $conn = $conexao->conectar();
            $sql = "update compra set formaPagamento = '$forma' order by codigoCompraPK desc limit 1;";
            $result = mysqli_query($conn,$sql); 
             
            
        }catch(Exception $erro){
            return "Algo deu errado!".$erro;
        }
    }

    public function precoTotalCompra(Conexao $conexao, int $quantidade, string $nome){
        try{
            $conn = $conexao->conectar();
            $sql = "update compra set precoTotal = (select preco from livro where nome = '$nome') * $quantidade order by codigoCompraPK desc limit 1";
            $result = mysqli_query($conn,$sql); 
             
            
        }catch(Exception $erro){
            return "Algo deu errado!".$erro;
        }
    }
}//fim do class

?>