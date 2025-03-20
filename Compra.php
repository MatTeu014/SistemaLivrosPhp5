<?php

    namespace PHP\atividade1;

    require_once('Livro.php');
    require_once('Usuario.php');
    use PHP\atividade1\Usuario;
    use PHP\atividade1\Livro;

    class Compra{

        private string $codigo;
        private Usuario $usuario;
        private string $formaPagamento;
        private Livro $livros;
        private float $precoFinal;

        public function __construct(string $codigo,Usuario $usuario,string $formaPagamento,Livro $livros,float $precoFinal){
            $this->codigo = $codigo;
            $this->usuario = $usuario;
            $this->formaPagamento = $formaPagamento;
            $this->livros = $livros;
            $this->precoFinal = $precoFinal;
        }

        public function __get(string $dados):mixed{
            return $this->$dados;
        }

        public function __set(string $variavel, string $dados):void{
            $this->variavel = $dados;
        }

        public function imprimir():string{
            return "Código da Compra: ".$this->codigo."<br>Usuário: ".$this->usuario->imprimir()."<br>Forma de Pagamento: ".$this->formaPagamento."<br>Livros: ".$this->livros->imprimir()."<br>Preço Final da Compra: R$".$this->precoFinal;
        }


    }



?>