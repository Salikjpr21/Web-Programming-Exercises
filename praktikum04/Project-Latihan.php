<html>
    <head>
        <style>
            table, th, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <h1> DATA MAHASISWA </h1>
    <p> =========================================================== </p>
      <table>  
        <?php  
        $file_data = fopen("datamhs.dat", "r");

        function hitungUsia($tanggal1, $tanggal2){
            
          // memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
          // dari tanggal pertama
          
          $tglLahir1 = explode("-", $tanggal1);
          $tgl1 = $tglLahir1[2];
          $bulan1 = $tglLahir1[1];
          $tahun1 = $tglLahir1[0];
          
          // Memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
          // dari tanggal kedua
          
          $tglLahir2 = explode("-", $tanggal2);
          $tgl2 = $tglLahir2[2];
          $bulan2 = $tglLahir2[1];
          $tahun2 =  $tglLahir2[0];
          
          // Menghitung JDN dari masing-masing tanggal
          
          $jdn1 = GregorianToJD($bulan1, $tgl1, $tahun1);
          $jdn2 = GregorianToJD($bulan2, $tgl2, $tahun2);

          // Menghitung selisih dari JDN
          $selisih = abs($jdn2 - $jdn1);
          
          // Menghitung selisih tahun dari kedua tanggal
          
          $usia = floor($selisih / 365.25);
          return $usia;
        }
        echo "<table>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>NIM</th>";
        echo "<th>Nama Mhs</th>";
        echo "<th>Tanggal Lahir</th>";
        echo "<th>Tempat Lahir</th>";
        echo "<th>Usia (Thn)</th>";
        echo "</tr>";
        
        $i=0;
        while (!feof($file_data) ) {
            $i++;
            $line_of_text = fgets($file_data);
            $col = explode('|', $line_of_text);
            echo "<tr><td height='10'>".$i."</td>
            <td>$col[0]</td>
            <td>$col[1]</td>
            <td>$col[2]</td>
            <td>$col[3]</td>
            <td>".hitungUsia($col[2], date("Y-m-d"));"</td>
            </tr>";
            
        }
        fclose($file_data);

        ?>  
      </table>

    <?php
    echo "<br>";
    echo "===========================================================";
    echo "<br>";
    echo "Jumlah Data : " .$i;
    ?>

    </body>
</html>