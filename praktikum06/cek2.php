<?php

    // mengecek keberadaan cookie 'namauser'
    // ket: cookie 'namauser akan tercreate ketika proses login sukses
    // silahkan cek kembali di script proses2.php

    if (!isset($_COOKIE['namauser'])){
        echo "<p>Hayooo... mau coba nge by-pass ya?</p>";
        echo "<p><a href='form2.html'>Login</a> dulu ya..</p>";

        // setelah memunculkan pesan diatas, selanjutnya dibreak dengan exit()
        exit();
    }
?>