<?php
// Meu cod
class celular {
    var $ligar;
    var $marca;
    var $modelo;
    var $cor;
    var $bateria;

    function ligar() {
        echo "O celular foi ligado.<br>";
    }

    function marca($marca) {
        echo "<p>A marca é '{$this->marca}' !</p>";
    }

    function modelo($modelo) {
        echo "<p>O modelo é: '{$this->modelo}'</p>";
    }

    function cor($cor) {
        echo "<p>A cor é: '{$this->cor}'</p>";
    }

    function bateria($bateria) {
        $this->bateria = $this->bateria + $bateria;
        echo " Bateria: " . $this->bateria . " % <br>";
    }

    function descarregar($bateria) {
        $this->bateria = $this->bateria - $bateria;

        if ($this->bateria < 0){
            $this->bateria = 0;
        }
        echo "O celular descarregou";
        echo " Bateria: " . $this->bateria . " % <br>"; 
    }

    function desligar() {
        while ($this->bateria > 0){
            $this->descarregar(5);
        }
        echo "O celular descarregou<br>";
    }
}
$celular1 = new celular();
$celular1->marca = "XIOME";
$celular1->modelo = "A55";
$celular1->cor = "Azul";
$celular1->bateria = "100";
$celular1->descarregar = "0";

$celular2 = new celular();
$celular2->marca = "IPHONE";
$celular2->modelo = "43";
$celular2->cor = "Vermelho";
$celular2->bateria = "100";
$celular2->descarregar = "100";

echo "------ Celular 1 ------<br>";
echo "marca: " . $celular1->marca . "<br>";
echo "modelo: " . $celular1->modelo . "<br>";
echo "cor: " . $celular1->cor . "<br>";
echo "bateria: " . $celular1->bateria . "<br>";
echo "bateria Final: " . $celular1->descarregar . "<br>";
$celular2 ->descarregar(0);
echo "<hr>";
echo "------ Celular 2 ------<br>";
echo "marca: " . $celular2->marca . "<br>";
echo "modelo: " . $celular2->modelo . "<br>";
echo "cor: " . $celular2->cor . "<br>";
echo "bateria: " . $celular2->bateria . "<br>";
echo "bateria Final: " . $celular2->descarregar . "<br>";

$celular2 ->descarregar(0);

// Do leonardo
class Celular {
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar() {
      $this->ligado = true;
      echo "O celular foi ligado";
    }

    function Desligar() {
        $this->ligado = false;
        echo "O celular foi desligado <br>";
    }
    
    function usar($consumir) {
       $this->bateria = $this-bateria - $consumir;
       if($this->bateria < 0){
            $this->bateria = 0;
       }
       echo "a bateria foi consumiada em $consumir <br>";
       echo "sobrando um total de $this->bateria";
    }
    function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        if($this->bateria > 100){
            $this->bateria=100;
        }
        echo "A bateria foi CARREGADA em $carga";
        echo "Aumentando a bateria para $this->bateria";
    }
}

$celular1 = new Celular();

$celular1->marca = "motorola";
$celular1->modelo= "g9";
$celular1->cor = "azul";
$celular1->bateria = 50;
$celular1->ligado = true;

echo "marca: $celular1->marca <br>";
echo "modelo: $celular1->modelo <br>";
echo "cor: $celular1->cor <br>";
echo "bateria: $celular1->bateria <br>";
echo "ligado: $celular1->ligado <br>";
echo "<br>";
$celular2 = new Celular();

$celular2->marca = "iphone";
$celular2->modelo= "15 pro max";
$celular2->cor = "azul";
$celular2->bateria = 50;
$celular2->ligado = true;

echo "marca: $celular2->marca <br>";
echo "modelo: $celular2->modelo <br>";
echo "cor: $celular2->cor <br>";
echo "bateria: $celular2->bateria <br>";
echo "ligado: $celular2->ligado <br>";
?>