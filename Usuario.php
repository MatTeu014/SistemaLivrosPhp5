<?php

    namespace PHP\atividade1;


    class Usuario{

        private string $nome;
        private string $cpf;
        private string $endereco;
        private string $telefone;
        private string $dataNascimento;
        private string $login;
        private string $senha;
        private string $numeroCartao;  
        private string $loginBD;
        private string $senhaBD;


        public function __construct(string $nome, string $endereco, string $telefone, string $dataNascimento, string $login,string $senha,string $numeroCartao){
            $this->loginBD = "matheus";
            $this->senhaBD = "123";
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataNascimento = $dataNascimento;
            $this->login = $login;
            $this->senha = $senha;
            $this->numeroCartao = $numeroCartao;
        }

        public function __get(string $dados):string{
            return $this->$dados;
        }

        public function __set(string $variavel,string $dados):void{
            $this->variavel = $dados;
        }

        public function verificarLogin(string $login, string $senha):string
        {
            if($this->loginBD == $login && $this->senhaBD == $senha){
                return "Bem-Vindo!!!";
            }else{
                return "Login e/ou senha invalidos!";
            }
        }//fim do método

        public function imprimir():string{
            return "Nome: ".$this->nome."<br>Endereço: ".$this->endereco."<br>Telefone: ".$this->telefone."<br>Data de Nascimento: ".$this->dataNascimento."<br>Login: ".$this->login."<br>Senha: ".$this->senha."<br>Número do Cartão: ". $this->numeroCartao;
        }

    }


?>