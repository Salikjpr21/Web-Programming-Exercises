<?php
$number = rand(1, 100);
setcookie("bilacak", $number, time()+3*30*24*3600,"/");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tebak Angka</title>
    </head>
    <body>
        <h1>Tebak Angka Bilangan Bulat Antara 0 Sampai 100</h1>
        <p>================================================================================</p>
        <p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
        <form method="POST" action="percobaan.php">
            Bilangan tebakan Anda  <input type="text" name="tebak">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>