<?php
//array key numerik
$a = array('agung',21,true,14.45);
echo $a[1];

for ($i = 4; $i >=0; $i--){
    echo $a[$i] . "<br>";

}
//array key asosiatif
$aso = ['nama' => 'agung', 'umur' => 21,'alamat' => 'bandung'];

foreach ($aso as $index){
    echo $index . "<br>";
}
?>