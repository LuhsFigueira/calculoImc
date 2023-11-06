<?php

// Função para calcular o IMC
function calcularIMC($peso, $altura) {
    // Fórmula do IMC: Peso / (Altura * Altura)
    return $peso / ($altura * $altura);
}

// Função para determinar a observação do peso
function determinarObservacaoIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25.0) {
        return "Peso normal";
    } elseif ($imc >= 25.0 && $imc < 30.0) {
        return "Pré-obesidade";
    } elseif ($imc >= 30.0 && $imc < 35.0) {
        return "Obesidade Grau 1";
    } elseif ($imc >= 35.0 && $imc < 40.0) {
        return "Obesidade Grau 2";
    } else {
        return "Obesidade Grau 3";
    }
}

// Dados de entrada
$nome = "Lucas";
$idade = 28;
$altura = 1.78; // Altura em metros
$peso = 97; // Peso em quilogramas

// Calcular o IMC
$imc = calcularIMC($peso, $altura);

// Determinar a observação do peso
$observacao = determinarObservacaoIMC($imc);

// Saída de dados
echo "Nome: $nome\n";
echo "Idade: $idade anos\n";
echo "IMC: $imc\n";
echo "Observação sobre o Peso: $observacao\n";

?>
