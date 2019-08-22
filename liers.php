<?php
if (isset($_POST['Input'])) {
 $nama1 = $_POST['nama1'];
 $nama2 = $_POST['nama2'];
 $nama3 = $_POST['nama3'];
 $nama4 = $_POST['nama4'];
 $nama5 = $_POST['nama5'];
 echo "<b> From Register </b> <br><br>";
 echo "Nama          : ";
 echo $nama1. "<br>";
 echo "Alamat        : ";
 echo $nama2. "<br>";
 echo "Jenis Kelamin : ";
 echo $nama3. "<br>";
 echo "Agama         : ";
 echo $nama4. "<br>";
 echo "Email         : ";
 echo $nama5. "<br>";
}
?> 