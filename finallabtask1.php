<?php
$length = 10;  
$width  = 5;  

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length of Rectangle: " . $length . " units<br>";
echo "Width of Rectangle: " . $width . " units<br>";
echo "Area of Rectangle: " . $area . " square units<br>";
echo "Perimeter of Rectangle: " . $perimeter . " units<br>";
?>







<?php
$amount = 1000;  
$vatRate = 0.15;  
$vat = $amount * $vatRate;
$total = $amount + $vat;

echo "Amount: $" . $amount . "<br>";
echo "VAT (15%): $" . $vat . "<br>";
echo "Total (including VAT): $" . $total;
?>






<?php
$number = 17;

if ($number % 2 == 0) {
    echo "The number $number is Even.";
} else {
    echo "The number $number is Odd.";
}
?>





<?php
$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "Largest number is $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest number is $b";
} else {
    echo "Largest number is $c";
}
?>






<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>





<?php
$numbers = array(5, 8, 12, 20, 25, 30);
$search = 20;
$found = false;

foreach ($numbers as $num) {
    if ($num == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element $search found in the array.";
} else {
    echo "Element $search not found.";
}
?>







<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

$count = 1;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $count . " ";
        $count++;
    }
    echo "<br>";
}

echo "<br>";

$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
?>






<?php
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

// Print array in shape
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}
?>



