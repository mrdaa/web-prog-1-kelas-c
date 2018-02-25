<?php

$a = 5;
$b = 5;
$c = 5;
$d = "5";

echo "$a + $b = "; echo $a + $b; echo "<br>";
echo "$a / $b = "; echo $a / $b; echo "<br>";
echo "$a > $b : "; echo $a > $b; echo "<br>";
echo "$a == $c : "; var_dump ($a == $c); echo "<br>";
echo "$a == $d : "; var_dump ($a == $d); echo "<br>";
echo "$a === $b : "; var_dump( $a === $b); echo "<br>";

?>