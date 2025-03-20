<?php

    namespace PHP\SistemaLivros\DAO;

    require_once('../DAO/Conexao.php');
    require_once('../DAO/Comprar.php');

    use PHP\SistemaLivros\DAO\Conexao;
    use PHP\SistemaLivros\DAO\Comprar;
    use PHP\SistemaLivros\DAO\Autenticar;

    $conexao = new conexao();
    $compra = new Comprar();
    $autenticar = new Autenticar();


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livraria</title>
        <link rel="stylesheet" href="css/cssTelaCompra.css">
    </head>
    <body><!--Inicio Body-->
        <header id="header"><!--Inicio Header-->

            <nav id="nav"><!--Inicio nav-->

                <div style="float:right; margin-top: 17px;margin-right: 20px;">
                    <button class="botao"><a href = "TelaLogado.php" style = "color: white;">Voltar</a></button>
                </div>

                <a href="TelaLogado.php" style="color: black;"><!-- Inicio Link Header TelaPrincipal-->
                    <div id="tituloHeaderBloco"><!--Inicio tituloHeaderBloco-->
                        <img id="iconeTitulo" src="imagens/171322.png" width="50px" height="50px"><!--Icone Título-->
                        <h1 id="tituloHeader">Livraria</h1><!--Título do Header-->
                    </div><!-- Fim tituloHeaderBloco-->
                </a><!-- Fim Link Header TelaPrincipal-->
                
            </nav><!--Fim nav-->
        
        </header><!--Fim Header-->

        
        <main id="main"><!--Inicio Main-->

            
            
            
            <section id="section"><!--Inicio Section-->
                <form method = "POST">

                    <div id = "compraBloco">
    
                        


                        <select name = "nome" style = "margin-left: 10%; margin-top: 1%; border-radius: 5px; font-size: 20px;">
                            <option selected>Escolha um Livro para Comprar</option>
                            <option value = "O Menino do Dedo Verde">O Menino do Dedo Verde</option>
                            <option value = "Elantris">Elantris</option>
                            <option value = "Extraordinario">Extraordinário</option>
                            <option value = "Harry Potter e a Pedra Filosofal">Harry Potter e a Pedra Filosofal</option>
                            <option value = "A Revolucao dos Bichos">A Revolução dos Bichos</option>
                            <option value = "Fabricante de Lagrimas">Fabricante de Lágrimas</option>
    
                        </select>

                        <input name = "quantidade" placeholder = "Quantidade de Livros" style = "border-radius: 5px; margin-left: 1%; font-size: 15px;"></input>

                        <button class = "botao">Consultar
                            <?php
                                if(isset($_POST['nome']) && $_POST['nome'] != ""){
                                $compra->inserirCodigoLivroCompra($conexao,$_POST['nome']);
                            }
                            ?>
                        </button>

                        <div id = "livroBloco">
                            <?php
                                if(isset($_POST['nome']) && $_POST['nome'] != ""){
                                    $compra->consultarLivro($conexao,$_POST['nome']);
                                }
                                
                            ?>
                        </div>

                        
                        <input name = "email" placeholder = "Digite seu E-mail" style = "border-radius: 5px; margin-left: 1%; font-size: 15px;"></input>

                        <select  name = "formaPagamento" style = "margin: 3%; font-size: 20px;border-radius: 5px;">
                            <option>Forma de Pagamento</option>
                            <option value = "Credito">Cartão de Crédito</option>
                            <option value = "Debito">Cartão de Débito</option>
                        </select>

                        <input type = "text" name = "numeroCartao" placeholder = "Número do Cartão" style = "border-radius: 5px; margin-left: 1%; font-size: 15px;"></input>

                        
                    </div>
                    <div style = "float: right; margin-right: 3%; margin-top: 3%;">
                        <button class = "botao" style = "width: 200px;">Finalizar Compra
                            <?php
                            if(isset($_POST['nome']) && isset($_POST['quantidade']) && $_POST['nome'] != "" && $_POST['quantidade'] != ""){
                                $compra->alterarQuantidadeLivro($conexao,$_POST['nome'],$_POST['quantidade']);
                            }
                            if(isset($_POST['email']) && $_POST['email'] != ""){
                            $compra->inserirCodigoClienteCompra($conexao,$_POST['email']);
                            }
                            if(isset($_POST['quantidade']) && $_POST['quantidade'] != ""){
                            $compra->quantidadeLivroCompra($conexao,$_POST['quantidade']);
                            }
                            if(isset($_POST['formaPagamento']) && $_POST['formaPagamento'] != ""){
                                $compra->formaPagamento($conexao,$_POST['formaPagamento']);
                            }
                            if(isset($_POST['nome']) && isset($_POST['quantidade']) && $_POST['nome'] != "" && $_POST['quantidade'] != ""){
                                $compra->precoTotalCompra($conexao,$_POST['quantidade'],$_POST['nome']);
                            }
                            if(isset($_POST['numeroCartao']) && $_POST['numeroCartao'] != ""){
                                $autenticar->autenticarCartao($conexao,$_POST['numeroCartao']);
                            }
                            ?>
                        </button>
                    </div>
                </form>

            </section><!--Fim Section-->
            
        </main><!--Fim Main-->


        <footer id="footer"><!--Inicio Footer-->
                
        </footer><!--Fim Footer-->

    </body><!--Fim Body-->
</html>