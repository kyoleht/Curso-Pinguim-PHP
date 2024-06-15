<?php 

class Pessoa {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function Falar() {
        echo $this->name . " de " . $this->age ." anos, acabou de falar.";
    }
}


$rafael = new Pessoa('Rafael Ferreira da Silva', 19);
$rafael->name = 'Rafael Ferreira da Silva';
$rafael->age = 19;
$rafael->Falar();
?>