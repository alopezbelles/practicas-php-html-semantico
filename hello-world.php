<?php



echo "Hola, PHP";
echo "<br>";
echo "Good Bye world";
echo "<br>";
echo "Good Bye world";
echo "<br>";
echo "Good Bye world";
echo "<br>";

$my_string = "Hola, me llamo alejandro y uso PHP";
echo $my_string . " helloooooooo";
echo "<br>";
echo gettype($my_string);
echo "<br>";

$my_int = 4;
echo "<br>";
$my_double = 4.5;
echo gettype($my_double);

echo "Good Bye world";
echo "<br>";
echo "Good Bye world";
echo "<br>";
echo "El valor de mi variable es $my_int";
echo "<br>";

const MY_CONSTANT = "Valor de la constante";
const MY_CONSTANT_2 = "Hola, constante";
echo "<br>";
echo MY_CONSTANT . MY_CONSTANT_2;
echo "<br>";
$my_array = [$my_int, $my_double, MY_CONSTANT];


echo "Hola, salto de linea" . "\n";
echo "Hola, salto de linea" . "\n";
echo "Hola, salto de linea" . "\n";



?>