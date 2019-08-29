<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Array</title>
</head>
<body>
    <center>
    <h2>FORM ARRAY</h2>
    </center>
    <fieldset>
    <legend>Form array</legend>
    <form action="" method="get">
    <label for="">Masukan Jumlah</label>
    <input type="number" name="jml">
    <br>
    <input type="submit" name="submit" value="simpan">
    <hr>
    </form>
    <?php
    if(isset($_GET['submit'])){
        $jml_form = $_GET['jml'];
        for($a = 1; $a <= $jml_form; $a++){
            ?>
            <form action="formarraypro.php" method="post">
            <label for="">Nama</label>
            <input type="text" name="nama[]" required>
            <label for="">Kelas</label>
            <input type="text" name="kelas[]" required>
            <label for="">Hobby</label>
            <input type="text" name="hoby[]" required>
            <br>
            <br>
             
            <?php } ?>
            <input type="submit" name="sbm" value="simpan">
            <input type="reset" value="reset">
            </form>
        <?php } ?>
    </fieldset>
</body>
</html>