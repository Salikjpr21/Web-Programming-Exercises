<html>
    <body>

    <?php  
    function hitungDenda($tglHarusKembali, $tglKembali){
        
        // Memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
        // dari tanggal pertama
        $pecah1 = explode("-", $tglHarusKembali);
        $tgl1 = $pecah1[2];
        $bulan1 = $pecah1[1];
        $tahun1 = $pecah1[0];
        
        // Memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
        // dari tanggal kedua
        $pecah2 = explode("-", $tglKembali);
        $tgl2 = $pecah2[2];
        $bulan2 = $pecah2[1];
        $tahun2 =  $pecah2[0];
        
        // Menghitung JDN dari masing-masing tanggal
        $jd1 = GregorianToJD($bulan1, $tgl1, $tahun1);
        $jd2 = GregorianToJD($bulan2, $tgl2, $tahun2);
        
        // Menghitung selisih hari dari dua buah tanggal
        $selisih = $jd2 - $jd1;

        // Menghitung total denda
        $totaldenda = $selisih * 3000;
        return $totaldenda;
    }

    // Cara masukkan tanggal (tanggalharuskembali, tanggal kembali)
    // dengan format tanggal (YYYY-MM-DD)
    echo "Besarnya denda adalah: Rp ".hitungDenda("2021-01-03", "2021-01-05");

    ?>  
    </body>
</html>