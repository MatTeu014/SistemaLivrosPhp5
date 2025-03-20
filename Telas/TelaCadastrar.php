<?php
    namespace PHP\SistemaLivros\Telas;
    
    require_once('../DAO/Conexao.php');
    require_once('../DAO/CadastrarCliente.php');


    use PHP\SistemaLivros\DAO\Conexao;
    use PHP\SistemaLivros\DAO\CadastrarCliente;


    $conexao = new Conexao();//Acessar a classe conexao
    $cadastrar = new cadastrarCliente();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livraria</title>
        <link rel="stylesheet" href="css/cssTelaCadastar.css">
    </head>
    <body><!--Inicio Body-->
    
        <header id="header"><!--Inicio Header-->

            <nav id="nav"><!--Inicio nav-->

                <a href="TelaPrincipal.php" style="color: black;"><!-- Inicio Link Header TelaPrincipal-->
                    <div id="tituloHeaderBloco"><!--Inicio tituloHeaderBloco-->
                        <div id="Bloco"><!--Inicio Bloco-->

                            <img id="iconeTitulo" src="imagens/171322.png" width="50px" height="50px"><!--Icone Título-->
                            <h1 id="tituloHeader">Livraria</h1><!--Título do Header-->

                        </div><!--Fim Bloco-->
                    </div><!-- Fim tituloHeaderBloco-->

                </a><!-- Fim Link Header TelaPrincipal-->
                
            </nav><!--Fim nav-->
        
        </header><!--Fim Header-->

        
        <main id="main"><!--Inicio Main-->   


            <div id="loginBloco" style="align-content: center;"><!--Inicio LoginBloco-->


                <h1 style="text-align: center;margin: auto; font-size: 50px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Cadastro</h1>

                <form method="POST">
                    <div class="loginBloco2"><!--Inicio loginBloco2-->

                        <div class="loginBloco3"><!--Inicio loginBloco3-->
                            <label class="labellogin">Nome:</label>
                        </div><!--Fim loginBloco3-->
                        <input class="inputLogin" name="nome"><!--input login-->
                        
                    </div><!--Fim loginBloco2-->

                    <div class="loginBloco2"><!--Inicio loginBloco2-->

                        <div class="loginBloco3"><!--Inicio loginBloco3-->
                            <label class="labelLogin">Endereço:</label>
                        </div><!--Fim loginBloco3-->
                        <input class="inputLogin" name="endereco"><!--input login-->

                    </div><!--Fim loginBloco2-->

                    <div class="loginBloco2"><!--Inicio loginBloco2-->

                        <div class="loginBloco3"><!--Inicio loginBloco3-->
                            <label class="labelLogin">Telefone:</label>
                        </div><!--Fim loginBloco3-->
                        <input class="inputLogin" name="telefone"><!--input login-->

                    </div><!--Fim loginBloco2-->

                    <div class="loginBloco2"><!--Inicio loginBloco2-->

                        <div class="loginBloco3"><!--Inicio loginBloco3-->
                            <label class="labelLogin">Data de Nascimento:</label>
                        </div><!--Fim loginBloco3-->
                        <input class="inputLogin" name="dataNascimento"><!--input login-->
            
                    </div><!--Fim loginBloco2-->

                    <div class="loginBloco2"><!--Inicio loginBloco2-->

                        <div class="loginBloco3"><!--Inicio loginBloco3-->
                            <label class="labelLogin">E-mail:</label>
                        </div><!--Fim loginBloco3-->
                        <input class="inputLogin" name="email"><!--input login-->

                    </div><!--Fim loginBloco2-->

                    <div class="loginBloco2"><!--Inicio loginBloco2-->

                        <div class="loginBloco3"><!--Inicio loginBloco3-->
                            <label class="labelLogin">Senha:</label>
                        </div><!--Fim loginBloco3-->
                        <input class="inputLogin" name="senha"><!--input login-->

                    </div><!--Fim loginBloco2-->

                    <div id="botoesBloco"><!--Inicio botoesBloco-->
                        <button class="botaoLogin">
                            <a href="TelaPrincipal.php" style="color: white;">Voltar
                            
                            </a></button>
                            <button type ="submit" class="botaoLogin" style="color: white;">
                                Cadastrar
                                <?php
                                if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['dataNascimento']) && isset($_POST['email']) && isset($_POST['senha'])){
                                    try{
                                        
                                    $nome = $_POST['nome'];
                                    $endereco = $_POST['endereco'];
                                    $telefone = $_POST['telefone'];
                                    $dataNascimento = $_POST['dataNascimento'];
                                    $email = $_POST['email'];
                                    $senha = $_POST['senha'];
                                    }catch(Except $erro){
                                    echo "Algo deu errado!<br>$erro";
                                }
                                    $cadastrar->cadastrar($conexao,$nome,$endereco,$telefone,$dataNascimento,$email,$senha);
                                }
                                    
                                ?>
                            </button>
                    </div><!--Fim botoesBloco-->
                </form>

            </div><!--Fim LoginBloco-->

        </main><!--Fim Main-->


        <footer id="footer"><!--Inicio Footer-->
        </footer><!--Fim Footer-->

    </body><!--Fim Body-->
</html>