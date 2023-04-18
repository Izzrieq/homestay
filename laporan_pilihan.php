<?php
include('sambungan.php'); 
?>

<html>
<link rel="stylesheet" href="senarai.css">
<body>
    <form action="laporan_cetak.php" method="post">
        <table>
            <caption>PILIHAN UNTUK CETAK LAPORAN</caption>
            <tr>
                <th>Homestay</th>
                <th>Bulan</th>
                <th>Jenis Laporan</th>
            </tr>
            <tr>
                <td><select name="norumah">
                <?php
                    //masukkan nama homestay dari jadual
                    $sql = "select * from homestay";
                    $data = mysqli_query($sambungan, $sql);
                    while ($homestay = mysqli_fetch_array($data)) {
                      echo "<option value='$homestay[norumah]'>$homestay[namarumah]</option>";
                    }
                ?> 
                </select>
                <td><select name="bulan">
                    <?php
                        //masukkan nama bulan dalam pilihan
                        $bulan = array("Januari", "Februari", "Mac", "April", "Mei", "Jun",
                                      "Julai", "Ogos","Septembar","Oktober", "November", "Disember");
                        for($i = 0; $i < 12; $i++ ) {
                            $b = $i + 1;
                            echo "<option value = $b> $bulan[$i] </option>";
                        }
                    ?> 
                </select>
                </td>
                <td><select name="pilihan">
                    <option value=1>Semua Homestay, Semua Bulan</option>
                    <option value=2>Mengikut Homestay</option>
                    <option value=3>Mengikut Bulan</option>
                    <option value=4>Mengikut Homestay dan Bulan</option>
                    </select>
                </td>    
            </tr>
        </table>
        <button class="papar" type="submit">Papar</button>
    </form>
</body>
</html>
