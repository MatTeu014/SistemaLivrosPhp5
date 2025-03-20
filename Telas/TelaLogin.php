<?php

namespace PHP\SistemaLivros\DAO;

require_once('../DAO/Conexao.php');
require_once('../DAO/Autenticar.php');

use PHP\Sistemalivros\DAO\Conexao;
use PHP\SistemaLivros\DAO\Autenticar;

$conexao = new Conexao();
$autenticar = new Autenticar();


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livraria</title>
        <link rel="stylesheet" href="css/cssTelaLogin.css">
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

            

            <form method = "POST">
            <div id="loginBloco" style="align-content: center;"><!--Inicio LoginBloco-->


                <h1 style="text-align: center;margin: auto; font-size: 50px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Login</h1>

                
                    <div class="loginBloco2"><!--Inicio loginBloco2-->
            
                        <div class="loginBloco3"><!--Inicio loginBloco3-->
                            <label class="labellogin">E-mail:</label>
                        </div><!--Fim loginBloco3-->
                        <input class="inputLogin" name = "email"><!--input login-->
                                
                    </div><!--Fim loginBloco2-->
            
                    <div class="loginBloco2"><!--Inicio loginBloco2-->
            
                        <div class="loginBloco3"><!--Inicio loginBloco3-->
                            <label class="labelLogin">Senha:</label>
                        </div><!--Fim loginBloco3-->
                        <input class="inputLogin" name = "senha"><!--input login-->
            
                    </div><!--Fim loginBloco2-->
                
            

                <div id="botoesBloco"><!--Inicio botoesBloco-->
                    <button class="botaoLogin"><a href="TelaPrincipal.php" style="color: white;">Voltar</a></button>
                    <button type ="submit" class="botaoLogin" style="color: white;">Logar

                    <?php
                        if(isset($_POST['email']) && isset($_POST['senha']) && $_POST['email'] != "" && $_POST['senha'] != "" ){
                            $autenticar->autenticarLogin($conexao,$_POST['email'],$_POST['senha']);

                        }
                    ?> 
                    </button>

                       

                </div><!--Fim botoesBloco-->
                

            </div><!--Fim LoginBloco-->
            </form>
        </main><!--Fim Main-->
        

        <footer id="footer"><!--Inicio Footer-->
        </footer><!--Fim Footer-->

    </body><!--Fim Body-->
</html>