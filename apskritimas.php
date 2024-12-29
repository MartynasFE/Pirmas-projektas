<?php
// Įtraukiame 'Figura' klasę iš atskiro failo
include('klase_figura.php');

// Apskritimo klasė paveldi Figura klasę
class Apskritimas extends Figura {

    // Metodas apskaičiuoti skersmenį 
    public function skersmuo() {
        return 2 * $this->radius;
    }

    // Metodas apskaičiuoti spindulį 
    public function spindulys() {
        return $this->radius;
    }
}

// Sukuriame Apskritimas objektą
$apskritimas = new Apskritimas();
$apskritimas->nustatytiMatmenis(5); // Nustatome spindulį

// Apskaičiuojame ir išvedame apskritimo skersmenį, spindulį, plotą ir perimetrą
echo "Apskritimo skersmuo: " . $apskritimas->skersmuo() . "<br>"; 
echo "Apskritimo spindulys: " . $apskritimas->spindulys() . "<br>"; 
echo "Apskritimo plotas: " . $apskritimas->plotas() . "<br>"; 
echo "Apskritimo perimetras: " . $apskritimas->perimetras() . "<br>"; 
?>
