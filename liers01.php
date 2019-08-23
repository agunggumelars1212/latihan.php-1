<?php
for ($i = 0; $i < 100; $i++) {
 for ($j = 100; $j > $i; $j--) {
 echo '&nbsp;';
 }
 for ($k = 0; $k <= $i; $k++) {
 echo '*';
 }
 echo '<br/>';
 }
 ?>