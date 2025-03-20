<?php

    namespace PHP\atividade1;


    class OperadoraCartao{


        private string $numeroCartao;
        private string $senha;


        public function __construct(string $numeroCartao,string $senha){
            $this->numeroCartao = $numeroCartao;
            $this->senha = $senha;
        }

        public function __get(string $dados):mixed{
            return $this->$dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir(): string{
            if($this->senha == "123" && $this->numeroCartao =="4321" ){
                return "Bem-Vindo!<br><br>Número do Cartão: ".$this->numeroCartao."<br>Senha: ".$this->senha;

            }else{
                return "Senha e/ou Número do Cartão Errado!";
            }
        }

    }



?>