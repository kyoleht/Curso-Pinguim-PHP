<?php 

    class Login {
        private $email;
        private $password;
        private $nome;

        public function __construct($email, $password, $nome)   
        {
            $this->email = $email;
            $this->password = $password;
            $this->nome = $nome;
        }

        public function Logar() {
            if($this->email == "emaildeteste@teste.com.br" and $this->password == "123456"):
                return "Login Sucessfull";
            
            else:
                return "Incorrect Email or Password";
            
            endif;
        }
    }

    $logado = new Login("emaildeteste@teste.com.br", "123456", "Rafael");
    echo $logado->Logar();

?>