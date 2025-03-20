<?php

    namespace PHP\SistemaLivros\DAO;

    require_once('Conexao.php');
    use PHP\SistemaLivros\DAO\Conexao;

    class Consultar{

        public function consultarCliente(Conexao $conexao, int $codigoClientePK){

            try{

                $conn = $conexao->conectar();

                $sql = "select * from cliente where codigoClientePK = $codigoClientePK";

                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){//enquanto existir dados, ele vai procurar o dado especifico

                    echo "<br>Código: ".$dados['codigoClientePK']."<br>Nome: ".$dados['nome']."<br>Endereço:".$dados['endereco']."<br>Telefone: ".$dados['telefone']."<br>Data de Nascimento: ".$dados['dataNascimento']."<br>E-mail: ".$dados['email']."<br>Senha: ".$dados['senha']."<br>Situação: ".$dados['situacao'];
                    return;//encerraro o processo
    
                }
            }catch(Exception $erro){
                echo "Algo deu Errado!<br>$erro";
            }
        }

        public function consultarlivro(Conexao $conexao, int $codigoLivroPK){

            try{

                $conn = $conexao->conectar();

                $sql = "select * from livro where codigoLivroPK = $codigoLivroPK";

                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){//enquanto existir dados, ele vai procurar o dado especifico

                    echo "<br>Código: ".$dados['codigoLivroPK']."<br>Nome: ".$dados['nome']."<br>Autor: ".$dados['autor']."<br>Categoria: ".$dados['categoria']."<br>Quantidade: ".$dados['quantidade']."<br>Situação: ".$dados['situacao'];
                    return;//encerraro o processo
    
                }
            }catch(Exception $erro){
                echo "Algo deu Errado!<br>$erro";
            }
        }

        public function consultarCompra(Conexao $conexao, int $codigoCompraPK){

            try{

                $conn = $conexao->conectar();

                $sql = "select * from compra where codigoCompraPK = $codigoCompraPK";

                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){//enquanto existir dados, ele vai procurar o dado especifico

                    echo "<br>Código: ".$dados['codigoCompraPK']."<br>Código do Livro: ".$dados['codigoLivroFK']."<br>Código do Cliente: ".$dados['codigoClienteFK']."<br>Quantidade de livros: ".$dados['quantidadeLivro']."<br>Forma de Pagamento: ".$dados['formaPagamento']."<br>Preço Total: ".$dados['precoTotal']."<br>Situação: ".$dados['situacao'];
                    return;//encerraro o processo
    
                }
            }catch(Exception $erro){
                echo "Algo deu Errado!<br>$erro";
            }
        }

        function consultarCartao(Conexao $conexao,string $codigoCartaoPK){

            try{

                $conn = $conexao->conectar();
                $sql = "select * from cartao where codigoCartaoPK = '$codigoCartaoPK'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>Código: ".$dados['codigoCartaoPK']."<br>Número do Cartão: ".$dados['numeroCartao']."<br>Situação: ".$dados['situacao'];
                    return;

                }//fim do while

            }catch(Exception $erro){

                "Algo deu errado<br>".$erro;

            }

        }
    }

    

?>