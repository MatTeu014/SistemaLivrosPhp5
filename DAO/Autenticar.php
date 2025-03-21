<?php

    namespace PHP\SistemaLivros\DAO;

    require_once('Conexao.php');
    require_once('Comprar.php');

    use PHP\SistemaLivros\DAO\Conexao;
    use PHP\SistemaLivros\DAO\Comprar;



    $compra = new Comprar();

    class Autenticar{

        public function autenticarLogin(Conexao $conexao, string $email, string $senha){

            try{
                $conn = $conexao->conectar();
                $sql = "select email,senha from cliente where email = '$email' and senha = '$senha'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){

                    if($dados['email'] == "admin" || $dados['senha'] == "admin"){
                        header('Location:../DAO/TelasCrud/TelaPrincipalCrud.php');
                        return;
                    }
                    if($dados['email'] == $email && $dados['senha'] == $senha){

                        echo  "<br>Acesso Concedido!";
                        header('Location:TelaLogado.php');
                        return;//encerrar o processo
                        
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

        public function autenticarCartao(Conexao $conexao, int $numeroCartao){

            try{
                $conn = $conexao->conectar();
                $sql = "select numeroCartao from cartao where NumeroCartao = '$numeroCartao'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){

                    if($dados['numeroCartao'] == $numeroCartao){

                        echo  "<br>Compra Finalizada!";
                        
                        return 1;//encerrar o processo
                        
                    }else{

                        
                        echo "<br>Número de cartão incorreto! Realize a compra novamente";
                        return;
                    }
                }//fim do while 
                
                
            }catch(Exception $erro){
                return "Algo deu errado".$erro;
            }
            
        }

  
    }//Fim da classe

?>