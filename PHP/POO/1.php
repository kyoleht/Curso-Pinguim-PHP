<?php 

class Pessoa {
    public $name;
    public $age;
    public $hobby;

    public function __construct($name, $age, $hobby) {
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
    }

    public function Relax() {
        return "Olá, eu sou o $this->name e gosto de $this->hobby!";
    }
}

    $phrase = new Pessoa('Rafael', 19, 'Programar');
    echo $phrase->Relax();
?>