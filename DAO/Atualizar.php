<?php

    namespace PHP\SistemaLivros\DAO;

    require_once('Conexao.php');
    require_once('Consultar.php');
    use PHP\SistemaLivros\DAO\Conexao;
    use PHP\SistemaLivros\DAO\Consultar;

    class Atualizar{

        function atualizarCliente(Conexao $conexao, string $campo, string $novoDado, int $codigoClientePK){
            
            try{
                $codigo = ""; //Instanciar a variavel
                $consultar = new Consultar();

                $conn = $conexao->conectar();

                if($campo == "nome" || $campo == "endereco" || $campo == "telefone" || $campo == "dataNascimento" || $campo == "email" || $campo == "senha" || $campo == "situacao"){

                    $sql = "update cliente set $campo = '$novoDado' where codigoClientePK = '$codigoClientePK'";

                }

                $result = mysqli_query($conn,$sql);

                mysqli_close($conn);

                if($result){
                    echo "Atualizado com sucesso!";
                }else{
                    echo "Não Atualizado!";
                }

            }catch(Exception $erro){
                "Algo deu errado<br>".$erro;
            }

            
        }//fim do metodo atualizar

        function atualizarLivro(Conexao $conexao, string $campo, string $novoDado, int $codigoLivroPK){
            
            try{
                $codigo = ""; //Instanciar a variavel
                $consultar = new Consultar();
    
                $conn = $conexao->conectar();

                if($campo == "nome" || $campo == "autor" || $campo == "categoria" || $campo == "quantidade" || $campo == "preco" || $campo == "situacao"){
    
                    $sql = "update livro set $campo = '$novoDado' where codigoLivroPK = '$codigoLivroPK'";
    
                }
    
                $result = mysqli_query($conn,$sql);
    
                mysqli_close($conn);
    
                if($result){
                    echo "Atualizado com sucesso!";
                }else{
                    echo "Não Atualizado!";
                }
    
            }catch(Exception $erro){
                "Algo deu errado<br>".$erro;
            }
        }

        function atualizarCompra(Conexao $conexao, string $campo, string $novoDado, int $codigoCompraPK){
            
            try{
                $codigo = ""; //Instanciar a variavel
                $consultar = new Consultar();
    
                $conn = $conexao->conectar();

                if($campo == "codigoLivroFK" || $campo == "codigoClienteFK" || $campo == "quantidadeLivro" || $campo == "formaPagamento" || $campo == "precoTotal" || $campo == "situacao"){
    
                    $sql = "update compra set $campo = '$novoDado' where codigoCompraPK = '$codigoCompraPK'";
    
                }
    
                $result = mysqli_query($conn,$sql);
    
                mysqli_close($conn);
    
                if($result){
                    echo "Atualizado com sucesso!";
                }else{
                    echo "Não Atualizado!";
                }
    
            }catch(Exception $erro){
                "Algo deu errado<br>".$erro;
            }
        }
        
        function atualizarCartao(Conexao $conexao, string $campo, string $novoDado, int $codigoCartaoPK){
            
            try{
                $codigo = ""; //Instanciar a variavel
                $consultar = new Consultar();
    
                $conn = $conexao->conectar();

                if($campo == "numeroCartao"){
    
                    $sql = "update cartao set $campo = '$novoDado' where codigoCartaoPK = '$codigoCartaoPK'";
    
                }
    
                $result = mysqli_query($conn,$sql);
    
                mysqli_close($conn);
    
                if($result){
                    echo "Atualizado com sucesso!";
                }else{
                    echo "Não Atualizado!";
                }
    
            }catch(Exception $erro){
                "Algo deu errado<br>".$erro;
            }
        }

    }//fim da classe atualizar


?>