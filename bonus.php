<?php
echo "Nama : Agung gumelars<br>";
echo "Kelas : XI RPL 1<br>";

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>data no $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>


