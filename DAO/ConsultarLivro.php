<?php

namespace PHP\SistemaLivros\DAO;

require_once('Conexao.php');
use PHP\SistemaLivros\DAO\Conexao;

class Livro{
    
    
    function ConsultarCliente($conexao, string $nome){

    try{

        $conn = $conexao->conectar();
        $sql = "select * from livro where nome = '$nome'";
        $result = mysqli_query($conn,$sql);

        while($dados = mysqli_fetch_Array($result)){

            if($dados['nome'] == $nome){

                echo "<br>Título: ".$dados['nome']."<br>Autor: ".$dados['autor']."<br>Categoria: ".$dados['categoria']."<br>Quantidade: ".$dados['quantidade']."<br>Preço: R$".$dados['preco'];
                return;//encerrar o processo

            }//fim do if

        }//fim do while

    }catch(Exception $erro){

        echo "Algo deu errado<br><br>".$erro;

    }//fim do try

    }
}


?>