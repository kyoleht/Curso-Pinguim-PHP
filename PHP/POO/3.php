<!-- Getters and Setters -->


<?php 

    class Login {
        public $email;
        public $password;

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($e) {
            $email = filter_var($e, FILTER_SANITIZE_EMAIL); // uma forma de limpar caracteres indesejados no email. ex: /\|
            return $this->email = $email;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($p) {
            return $this->password = $p;
        }

        public function Logar() {
            if($this->email == "teste@teste.gmail.com" and $this->password == "1234"):
                // se o email for igual a essa string e a senha igual a outra, o login sera realizado
                echo "Login Sucessfull!";
            else:
                echo "Incorrect Email or Password";
            endif;
        }

            
    }

    $logar = new Login();
    $logar->setEmail("teste@teste.gmail.com");
    $logar->setPassword("1234");
    $logar->Logar();
    echo "<br>";
    echo $logar->getEmail();


?>