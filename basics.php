<!DOCTYPE html>
<html lang="en">
<head><title>PHP Basics</title></head>
<body>
<?php
echo "Ben Ferro<br>c3654717" //My first PHP
?>

<h2>Using Escape Characters</h2>

<?php
echo "\"Most programmers say it's better to use 'echo' rather than 'print\"' says who?"
?>

<h2>Variables</h2>
<?php
$name = "David";
$age = 12;
echo 'Hi my name is ' . $name . ' and I am ' . $age . ' years old';
echo "<br>Mi nombre es $name y tengo $age anos de edad";
?>


<h2>Functions</h2>

<?php
//gettype() returns the datatype of the variable e.g. string
echo gettype($name);
echo '<br />';
//strlen() returns the length of the string
echo strlen($name);
echo '<br />';
//strtoUpper() returns the uppercase version of the string
echo strtoupper($name);
?>

<h2>Arithmetic</h2>
<h3>

<?php
$num1 = 9;
$num2 = 12;


echo "num1 = $num1<br>";
echo "num2 = $num2<br>";
echo "num1 x num2 = " . $num1 * $num2;
echo "<br>num1 as a percentage of num2 = " . $num1/$num2 * 100 . "%"; 
echo "<br>num2 divided by num1 = " .intdiv($num2,$num1). " remainder ". $num2 % $num1; 
?>



<?php
$height = 1.8;
$inches = floor(($height *100) / 2.54);
$feet = floor($inches/12);
echo "<br><br>Name: $name";
echo "<br>Age: $age";
echo "<br>Height in Meters: $height";
echo "<br>Height in Feet and inches: $feet ft " . $inches % 12 .  " ins";
?>

</h3>

</body>

</html>
