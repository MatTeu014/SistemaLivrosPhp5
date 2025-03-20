<?php

    namespace PHP\SistemaLivros\DAO;

    class Conexao{
        function conectar(){
            try{                        
                $conn = mysqli_connect('localhost','root','','sistemalivros'); //<- local do banco,usuario,senha e nome do banco de dados
                
                if($conn){
                    
                    return $conn;

                }
                echo "Algo deu errado!";

            }catch(Exception $erro){
                return "Algo deu Errado!<br><br>".$erro;
            }
        }
    }

?>