<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Output Pertemuan 2</title>
</head>
<body>
<?php
    function volume ($p, $la, $t){
      $volume = $p*$la*$t;
      echo " <b>Rumus Menghitung Volume</b><br>";
      echo " Luas Alas : $la cm<br>";
      echo " Tinggi : $t cm<br>"; 
      echo " Hasil Volume nya adalah : $volume ";
    }

    volume(15, 22, 5);
    volume(17, 25, 7);
    volume(20, 30, 9);
?>
</body>
</html>
