
<?php
// Constantes das fórmulas
define("HOMEM_A", 72.7);
define("HOMEM_B", 58);

define("MULHER_A", 62.1);
define("MULHER_B", 44.7);

// Captura os dados da URL (?altura=1.75&sexo=M por exemplo)
if (isset($_GET['altura']) && isset($_GET['sexo'])) {
    $altura = (float) $_GET['altura'];
    $sexo = strtoupper($_GET['sexo']); // garante maiúsculo
} else {
    echo "Informe os dados na URL. Exemplo: ?altura=1.75&sexo=M <br>";
    exit;
}

// Calcula peso ideal
if ($sexo == "M") {
    $pesoIdeal = (HOMEM_A * $altura) - HOMEM_B;
    echo "Sexo: Masculino <br>";
    echo "Altura: {$altura} m <br>";
    echo "Peso Ideal: " . number_format($pesoIdeal, 2, ',', '.') . " kg";
} elseif ($sexo == "F") {
    $pesoIdeal = (MULHER_A * $altura) - MULHER_B;
    echo "Sexo: Feminino <br>";
    echo "Altura: {$altura} m <br>";
    echo "Peso Ideal: " . number_format($pesoIdeal, 2, ',', '.') . " kg";
} else {
    echo "Sexo inválido. Use 'M' para masculino ou 'F' para feminino.";
}
?>
