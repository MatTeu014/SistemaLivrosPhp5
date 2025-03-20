<?php

    namespace PHP\SistemaLivros\DAO;

    require_once('Conexao.php');
    use PHP\SistemaLivros\DAO\Conexao;

    class Autenticar{

        public function autenticarLogin(Conexao $conexao, string $email, string $senha){

            try{
                $conn = $conexao->conectar();
                $sql = "select email,senha from cliente where email = '$email' and senha = '$senha'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){

                    if($dados['email'] == $email && $dados['senha'] == $senha){

                        echo  "<br>Acesso Concedido!";
                        header('Location:TelaLogado.php');
                        return;//encerrar o processo
                        
                    }else{
                        echo "Acesso Negado!";
                   
                    }
                    
                
                }//fim do while

            }catch(Exception $erro){
                return "Algo deu errado".$erro;
            }
        }

        public function consultarCliente(Conexao $conexao, string $email){
            
            try{
                $conn = $conexao->conectar();
                $sql = "select email from cliente where email = '$email'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){

                    if($dados['email'] == $email){
                        return;//encerrar o processo
                        
                    }
                    
                }//fim do while

            }catch(Exception $erro){
                return "Algo deu errado".$erro;
            }
        }

        public function autenticarCartao(Conexao $conexao, string $numeroCartao){

            try{
                $conn = $conexao->conectar();
                $sql = "select numeroCartao from cartao where NumeroCartao = '$numeroCartao'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){

                    if($dados['numeroCartao'] == $numeroCartao){

                        echo  "<br>Compra Finalizada!";
                        return;//encerrar o processo
                        
                    }else if($dados['numeroCartao'] != $numeroCartao){
                        echo "<br>Número de cartão incorreto!";
                        return;
                    }
                }//fim do while

            }catch(Exception $erro){
                return "Algo deu errado".$erro;
            }
        }

  
    }//Fim da classe

?>