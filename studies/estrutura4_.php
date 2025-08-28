<?php

if (isset($_GET['n'])) {
    $n = (int) $_GET['n']; 
} else {
    $n = 0;
    echo "Informe um número na URL. Exemplo: ?n=10 <br>";
}

// Geração da série
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        
        echo "1 ";
    } else {
       
        echo $i . " ";
    }
}
?>
