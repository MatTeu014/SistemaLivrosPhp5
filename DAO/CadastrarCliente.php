<?php

namespace PHP\SistemaLivros\DAO;

require_once('Conexao.php');
use PHP\SistemaLivros\DAO\Conexao;

class cadastrarCliente{

    public function cadastrar(Conexao $conexao, string $nome, string $endereco, string $telefone, string $dataNascimento, string $email, string $senha){

        try{

            $conn = $conexao->conectar();//Abrir a conexao
            $sql = "insert into cliente(nome,endereco,telefone,dataNascimento,email,senha) values('$nome','$endereco','$telefone','$dataNascimento','$email','$senha')";
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

}//fim do class

?>