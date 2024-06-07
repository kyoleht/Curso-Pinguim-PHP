<?php 

    class Hobby {
        public $jogo;
        public $plataforma;

        public function __construct($jogo, $plataforma)
        {
            $this->jogo = $jogo;
            $this->plataforma = $plataforma;
        }

        public function daily() {
            return "Hoje a noite eu irei jogar $this->jogo no $this->plataforma";
        }

    }
    
    $night = new Hobby('Red Dead Redemption', 'PC');
    echo $night->daily();
?>