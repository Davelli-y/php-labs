<?php
// Verifica se foi passado um valor pela URL (?n=7 por exemplo)
if (isset($_GET['n'])) {
    $n = (int) $_GET['n']; // força ser número inteiro
} else {
    $n = 0;
    echo "Informe um número na URL. Exemplo: ?n=7 <br>";
}

// Exibir a sequência de Fibonacci até o n-ésimo termo
$f1 = 1;
$f2 = 1;

if ($n > 0) {
    echo $f1 . " ";
}
if ($n > 1) {
    echo $f2 . " ";
}

for ($i = 3; $i <= $n; $i++) {
    $f3 = $f1 + $f2;
    echo $f3 . " ";
    $f1 = $f2;
    $f2 = $f3;
}
?>
