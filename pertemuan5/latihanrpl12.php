<?php
$cars = ["bmw", "lambo", "toyota", "ferrari", "hyundai", "mitsubishi"];
// echo $cars[1];
// var_dump($cars);
// echo "<hr>";
print_r($cars);
unset($cars[5]);
echo "<hr>";
echo "Data setelah dihapus";
print_r($cars);
echo "<hr>";
unset($cars[3]);
echo "Data setelah dihapus";
print_r($cars);

$cars[3] = "ferrari";
echo "<hr>";

print_r($cars);



// output for 
// for ($i = 0; $i < count($cars); $i++) {
//     echo $cars[$i];
//     echo "<hr>";
// }

// output foreach
// foreach ($cars as $car) {
//     echo $car;
//     echo "<hr>";
// }

echo coun