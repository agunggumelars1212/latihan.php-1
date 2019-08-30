<?php
// Membuat fungsi
function perkalian($a, $b)
{
	$hasil = $a * $b;
	return $hasil;
}

// Memanggil fungsi
$hasil = perkalian(3, 4);
echo $hasil; // hasil 9

// Memanggil fungsi
$a = 4;
$b = 5;
echo 'Hasil perkalian ' . $a . ' x ' . $b . ' adalah: ' . perkalian ($a, $b);
?>