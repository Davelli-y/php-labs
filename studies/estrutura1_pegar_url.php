<?php
//$a = $_GET['a'];

if(isset($_GET['a'])){
    $a = $_GET['a'];
  
}
else { $a= 0 ;
    echo "Informe um número na URL, exemplo: ?a=5 <br>";
}
for ($i=1; $i <= 10; $i++) {
    echo "$a x $i = " . ($a * $i) . "<br>";
}

?>