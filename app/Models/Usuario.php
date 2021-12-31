<?php

    class Usuario {
        private $user;

        public function __construct() 
        {
            $this->user = new Conexao();
        }

        public function armazenar($dados) {
            $this->user->query("INSERT INTO usuarios(nome, email, senha) VALUES (:nome, :email, :senha)");

            $this->user->bind("nome", $dados['nome']);
            $this->user->bind("email", $dados['email']);
            $this->user->bind("senha", $dados['senha']);

            if($this->user->executa()):
                return true;
            else:
                return false;
            endif;                                
        }

        public function verificarLogin($email, $senha) {
            $this->user->query("SELECT * FROM usuarios WHERE email = :email");
            $this->user->bind("email", $email);

            if($this->user->resultado()):
                $resultado = $this->user->resultado();
                if(password_verify($senha, $resultado->senha)): 
                    return $resultado;
                else:
                    return false;                    
                endif;    
            else:
                return false;
            endif;                                 
        }
    }