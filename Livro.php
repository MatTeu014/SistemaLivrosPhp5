<?php

    namespace PHP\atividade1;


    class Livro{

        private string $codigo;
        private string $codigo2;
        private string $nome;
        private string $autor;
        private string $preco;
    
        public function __construct(string $codigo,string $nome,string $autor,string $preco){
            $this->codigo2 = "1";
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->autor = $autor;
            $this->preco = $preco;
   
        }   

        public function __get(string $dados):mixed{
            return $this->dados;
        }

        public function __set(string $variavel,string $dados):void{
            $this->variavel = $dados;
        }

        public function disponibilidade(string $codigo){
            if($this->codigo2 == $codigo){
                return "Livro Disponivel!";
            }else{
                return "Livro Indisponivel!";
            }
        }

        public function imprimir():mixed{
           
            return "Código do Livro: ".$this->codigo."<br>Nome: ".$this->nome."<br>Autor: ".$this->autor."<br>Preço: ".$this->preco;
        }
    }
?>