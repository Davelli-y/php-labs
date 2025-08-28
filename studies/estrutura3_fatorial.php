<?php
// Verifica se o número foi passado pela URL (?n=5 por exemplo)
if (isset($_GET['n'])) {
    $n = (int) $_GET['n']; // força ser inteiro
} else {
    $n = 0;
    echo "Informe um número na URL. Exemplo: ?n=5 <br>";
}

// Calcula o fatorial
$fatorial = 1;
$expressao = "";

for ($i = 1; $i <= $n; $i++) {
    $fatorial *= $i;
    $expressao .= ($i == 1) ? $i : " * " . $i; // monta a expressão bonitinha
}

// Exibe o resultado
if ($n > 0) {
    echo "{$n}! = {$expressao} = {$fatorial}";
}
?>
