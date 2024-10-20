<?php
class FiguraGeometrica {
    public $tipoFigura;
    public $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function getLado1() {
        return $this->lado1;
    }

    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    public function calcularArea() {
        return "Este método debe ser sobreescrito en las clases hijas.";
    }

    public function __destruct() {
        echo "<br><br>La figura {$this->tipoFigura} ha sido destruida";
    }
}
?>
