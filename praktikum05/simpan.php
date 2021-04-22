<?php
    $namaFile = "datamhs.dat";
    $myFile = fopen($namaFile, "a") or die("Tidak bisa buka file!");
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tglLhr = $_POST['tgllhr'];
    $tmptLhr = $_POST['tmptlhr'];

    $arryData = array($nim, $nama, $tglLhr, $tmptLhr);

    $updateData = join("|", $arryData);

    if(isset($_POST['submit'])){
        fwrite($myFile, "$updateData\n");
        echo "Berhasil Menambahkan Data Baru";
    }

    fclose($myFile);
?>