<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "<h2>Resultados:</h2>";
    echo "Soma: " . ($num1 + $num2) . "<br>";
    echo "Subtração: " . ($num1 - $num2) . "<br>";
    echo "Multiplicação: " . ($num1 * $num2) . "<br>";

    if ($num2 != 0) {
        echo "Divisão: " . ($num1 / $num2) . "<br>";
        echo "Módulo: " . ($num1 % $num2) . "<br>";
    } else {
        echo "Divisão e módulo não são possíveis (divisor = 0).<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculos entre dois números</title>
</head>
<body>
    <h1>Digite dois números</h1>
    <form method="post">
        Número 1: <input type="number" name="num1" step="any" required><br><br>
        Número 2: <input type="number" name="num2" step="any" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
