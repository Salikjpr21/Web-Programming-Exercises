<?php
include('cek2.php');

echo "<h1>Page 3</h1>";
// menampilkan nama lengkap usernya
echo "<p>Selamat datang ". $_COOKIE['namauser']. "</p>";

echo "<h2>Menu Utama</h2>";
echo "<p><a href='page1cookie.php'>Page 1</a> | <a href='page2cookie.php'>Page 2</a> | <a href='page3cookie.php'>Page 3</a> | <a href='logout2.php'>Logout</a></p>";

?>