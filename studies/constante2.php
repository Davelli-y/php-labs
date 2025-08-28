<?php
define('NUMERO1', 1);
define('NUMERO2', 2);
define('NUMERO3',3);   
define('NUMERO4',4);




define('NUMERO5', 5);
define('NUMERO6', 6);
define('NUMERO7', 7);   
define('NUMERO8', 8);

// Média aritmética
$media = (NUMERO1 + NUMERO2 + NUMERO3 + NUMERO4) / 4;


// Média ponderada com pesos 1, 2, 3 e 4
$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;
$soma_pesos = $peso1 + $peso2 + $peso3 + $peso4;

$media_ponderada = (
    NUMERO1 * $peso1 +
    NUMERO2 * $peso2 +
    NUMERO3 * $peso3 +
    NUMERO4 * $peso4
) / $soma_pesos;


?>

<html>
<font color="red">
  <?php echo "<br> A média aritmética é " . $media . "<br>";?>
</font>

<font color= "green">
  <?php echo "<br> A média ponderada é " . $media_ponderada . "<br>";?>
</font>


</html>