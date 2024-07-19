<?php 

    class Hardware {
        public $processador;
        public $ssd;
        public $placa_video;

        public function PCIE_ATIVO() {
            echo "Ativou";
            echo "<br>";
        }

        public function PCIE_DESATIVO() {
            echo "Não Ativou!";
            echo "<br>";        
        }

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

        $PCIE4 = new PCIE4();
        $PCIE4->processador = "Ryzen 7 5700X";
        $PCIE4->ssd = "Corsair 1TB NVME 2.0";
        $PCIE4->placa_video = "4060ti";
        $PCIE4->MaisDesempenho();
        $PCIE4->PCIE_ATIVO();
        var_dump($PCIE4);

        $PCIE3 = new PCIE3();
        $PCIE3->processador = "Ryzen 5 5600G";
        $PCIE3->ssd = "Kingston 500GB NVME 2.0";
        $PCIE3->placa_video = "1050ti";
        $PCIE3->MenosDesempenho();
        $PCIE3->PCIE_DESATIVO();
        var_dump($PCIE3);
?>