<?php
const NOME = "Guilherme";
const SOBRENOME = "Davelli";
define('IDADE', 28);
echo "bom dia.";

?>

<html>
<font color="red">
   <?php echo "<br> O meu nome é " . NOME . "<br>"; ?>
</font>
<font color="blue">
<?php echo SOBRENOME; ?>
</font>
<font color="green">
<?php echo "<br> e Tenho " . IDADE . " Anos"; ?>
</font>
</html>