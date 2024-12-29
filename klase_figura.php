<?php
// Bendroji figūros klasė
class Figura {
    public $radius; // spindulys

    // Metodas nustatyti figūros matmenims
    public function nustatytiMatmenis($radius) {
        $this->radius = $radius;
    }

    // Apskritimo perimetras
    public function perimetras() {
        return 2 * pi() * $this->radius;
    }
    
    // Apskritimo plotas
    public function plotas() {
        return pi() * pow($this->radius, 2);
    }
}
?>
