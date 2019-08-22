<html>
 <head><title>Pengolahan Form</title></head>
 <body>
 <FORM ACTION="" METHOD="POST" NAME="input">
 Nama Anda : <input type="text" name="nama"><br>
 Nilai 1   : <input type="text" name="a"><br>
 Nilai 2   : <input type="text" name="b"><br>
 <input type="submit" name="Input" value="Input">
 <input type="reset" name="reset" value="Hapus">
 </FORM>
 </body>
</html>
<?php
if (isset($_POST['Input'])) {
 $nama = $_POST['nama'];
 $a = $_POST['a'];
 $b = $_POST['b'];
 $c = ($a + $b)/2;

 echo "Nama Anda : <b>$nama</b><br>";
 echo "Nilai 1   : <b>$a</b><br>";
 echo "Nilai 2   : <b>$b</b><br>";
 echo "rata rata : <b>$c</b><br>"; 
}
?> 