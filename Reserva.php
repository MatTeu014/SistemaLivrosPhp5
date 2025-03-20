<?php

    namespace PHP\atividade1;

    require_once('Livro.php');
    use PHP\atividade1\Livro;


    class Reserva{

        private Livro $livro;

        public function __construct(Livro $livro){
            $this->livro = $livro;
        }

        public function __get(string $dados):mixed{
            return $this->dados;
        }

        public function __set(string $variavel,string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return "Nome do Livro para Reserva: ".$this->livro->imprimir();
        }

    }


?>