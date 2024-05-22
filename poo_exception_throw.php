<?php

class Calculator {
    // Método para realizar a divisão
    public function divide($dividend, $divisor) {
        try {
            // Checa se o divisor é zero
            if ($divisor == 0) {
                throw new Exception("Divisão por zero não é permitida.");
            }
            $result = $dividend / $divisor;
            echo "Resultado: " . $result . "\n";
        } catch (Exception $e) {
            // Trata a exceção se o divisor for zero
            echo "Erro: " . $e->getMessage() . "\n";
        } finally {
            // Sempre executa após o try e o catch
            echo "Operação finalizada.\n";
        }
    }
}

// Criar um objeto da classe Calculator
$calculator = new Calculator();

// Testar o método divide
$calculator->divide(10, 2); // Resultado esperado: 5
$calculator->divide(10, 0); // Deve lançar exceção de divisão por zero

?>
