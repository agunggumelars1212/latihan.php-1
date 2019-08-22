<?php
echo "Nama : Agung gumelars<br>";
echo "Kelas : XI RPL 1<br>";

for($i = 1; $i <= 10; $i++){
    echo "<br>";
    echo "perkalian $i <br>--------------------------------<br>";

    for($j = 1; $j < 11; $j++){
        $g = $i*$j;
        echo "$i * $j = ".$g;
        if ($g % 2 == 0){
            echo "=> Bilangan genap<br>";
        
        }
        else{
            echo "=>bilangan ganjil<br>";
        }
    }
}
?>