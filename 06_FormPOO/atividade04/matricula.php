<?php

class Matricula {
    private $aluno;    
    private $plano;
    private $meses;
    private $modalidades; 

    public function __construct($aluno, $plano, $meses, $modalidades) {
        $this->aluno = $aluno;
        $this->plano = $plano;
        $this->meses = $meses;
        $this->modalidades = $modalidades;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function getPlano() {
        return $this->plano;
    }

    public function getMeses() {
        return $this->meses;
    }

    public function getModalidades() {
        return $this->modalidades;
    }

    public function calcularValorPlano() {
        if ($this->plano == "Basico") {
            return 80.00;
        } elseif ($this->plano == "Plus") {
            return 120.00;
        } elseif ($this->plano == "Premium") {
            return 180.00;
        }
        return 0;
    }

    public function calcularValorModalidade($modalidade) {
        if ($modalidade == "Natacao") {
            return 60.00;
        } elseif ($modalidade == "Funcional") {
            return 40.00;
        } elseif ($modalidade == "Lutas") {
            return 50.00;
        }
        return 0;
    }

    public function calcularMensalidade() {
        $totalMensal = $this->calcularValorPlano();

        foreach ($this->modalidades as $mod) {
            $totalMensal += $this->calcularValorModalidade($mod);
        }

        return $totalMensal;
    }

    public function calcularPercentualDesconto() {
        if ($this->meses >= 1 && $this->meses <= 5) {
            return 0;
        } elseif ($this->meses >= 6 && $this->meses <= 11) {
            return 10;
        } elseif ($this->meses == 12) {
            return 20;
        }
        return 0;
    }

    public function calcularSubtotal() {
        return $this->calcularMensalidade() * $this->meses;
    }

    public function calcularDesconto() {
        $subtotal = $this->calcularSubtotal();
        $percentual = $this->calcularPercentualDesconto();
        
        
        return $subtotal * ($percentual / 100);
    }

    public function calcularTotal() {
        return $this->calcularSubtotal() - $this->calcularDesconto();
    }
}