<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP & <HTML></HTML></title>
</head>
<body>

<?php
$a = 5;
$b = 20;
$c = $a + $b;

if($c <= 5){
    echo '<h1 style="color:red">' .$c;
}
elseif($c <= 10){
    echo '<h1 style="color:blue">' .$c;
}
elseif($c <= 15){
    echo '<h1 style="color:yellow">' .$c;
}

elseif($c <= 20){
    echo '<h1 style="color:orange">' .$c;
}

elseif($c <= 25){
    echo '<h1 style="color:pink">' .$c;
}

elseif($c <= 30){
    echo '<h1 style<?php
    /* contoh 1 */
    for ($i = 1; $i <= 10; $i++) {
     echo "$i ";
    }
    echo "<br><br>";
    /* contoh 2 */
    for ($i = 1; ; $i++) {
     if ($i > 10) {
     break;
     }
     echo "$i ";
    }
    echo "<br><br>";
    /* contoh 3 */
    $i = 1;
    for (; ; ) {
     if ($i > 10) {
     break;
     }
     echo "$i ";
     $i++;
    } echo "<br><br>";
    /* contoh 4 */
    for ($i = 1; $i <= 10; print "$i ", $i++);
    ?> ="color:magenta">' .$c;
}

elseif($c <= 35){
    echo '<h1 style="color:cyan">' .$c;
}

elseif($c <= 40){
    echo '<h1 style="color:plum">' .$c;
}

elseif($c <= 45){
    echo '<h1 style="color:black">' .$c;
}

elseif($c <= 50){
    echo '<h1 style="color:purple">' .$c;
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>