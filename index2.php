<?php

$Nama_anda="amir";
$a = 10;
$b = 10;
$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;
$alas = 5;
$tinggi = 10;
$babi = 0.5;
$hasil = 0.5 * $alas * $tinggi;

?>
<!DOCTYPE html>
<html lang ="en">
<head>
 <meta charset="UFT-8">
 <meta name ="viewport" content="windth=device-width, initial-scale=1.0">
 <title>latihan 1</title>
</head>
<body>
<?php
        echo "<h1><center>halo $Nama_anda</h1><center>";
        echo "<h1><center>hasil penjumlahan $a + $b adalah : $c</h1><center>";
        echo "<h1><center>hasil pengurangan $a - $b adalah : $d</h1><center>";
        echo "<h1><center>hasil perkalian $a * $b adalah : $e</h1><center>";
        echo "<h1><center>hasil pembagian $a : $b adalah : $f</h1><center>";
        echo "<h1><center>hasil MODULUS $a / $b adalah : $g</h1><center>";
        echo "<h1><center>hasil segitiga  $babi * $alas * $tinggi  adalah : $hasil</h1><center>";
        ?>
</body>
</html>
