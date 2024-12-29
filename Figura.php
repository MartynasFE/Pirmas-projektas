<?php
// Geometrinio interfeiso apibrėžimas
interface Geometrinis {
    public function perimetras();
    public function plotas();
}

// Bendroji figūros klasė, įgyvendinanti Geometrinis interfeisą
class Figura implements Geometrinis {
    const PI = 3.14159; // Konstantą PI reikšmė
    
    public $radius; // spindulys

    // Metodas nustatyti figūros matmenims (spindulys)
    public function nustatytiMatmenis($radius) {
        $this->radius = $radius;
    }

    // Apskritimo perimetras
    public function perimetras() {
        return 2 * self::PI * $this->radius;
    }
    
    // Apskritimo plotas
    public function plotas() {
        return self::PI * pow($this->radius, 2);
    }
}
?>
