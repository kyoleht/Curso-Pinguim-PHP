<?php


// public, protected and private

    class Hardware {
        private $processador;
        // propriedade protected ou private = não pode ser acessada fora de sua classe
        public $ssd;
        // public = pode ser acessada de qualquer lugar
        public $placa_video;

        public function PCIE_ATIVO() {
            echo "Ativou";
            echo "<br>";
        }

        public function PCIE_DESATIVO() {
            echo "Não Ativou!";
            echo "<br>";        
        }


        // set and get
        // utilizado pra chamar uma propriedade protected ou private atraves de uma instância especifica 

        public function setProcessador($p) {
            return $this->processador = $p;
        }

        public function getProcessador() {
            return $this->processador;

        }

        // definimos os nomes do set e get e acrescentamos o return no codigo para poder chamá-los e exibi-los na tela


    }

        class PCIE4 extends Hardware {
            public function MaisDesempenho() {
                echo "Utilizando todo o potencial das peças";
                echo "<br>";
            }
        }

        class PCIE3 extends Hardware {
            public function MenosDesempenho() {
                echo "Utilizando metade do potencial das peças";
                echo "<br>";
            }
        }

        // a instância
        
        $hardware = new Hardware();
        $hardware->setProcessador("Ryzen 7 5700X");
        echo $hardware->getProcessador();

        // o set é usado para definir o valor entre () e chamar a propriedade protegida
        // o get é usado para exibir no console o valor, no caso, "Ryzen 7 5700X"
    
?>