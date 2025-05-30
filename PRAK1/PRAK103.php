<?php
$Celcius = 37.841;
$konversiF = round((9/5) * $Celcius + 32, 4);
$koversiK = round($Celcius + 273.15, 4);
$konversiR = round((4/5) * $Celcius, 4);

echo "Fahrenheit (F) = $konversiF <br>";
echo "Reamur (R) = $konversiR <br>";
echo "Kelvin (K) = $koversiK";
?>