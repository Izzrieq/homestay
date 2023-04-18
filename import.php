<?php
include('sambungan.php');
$nametable = $_POST['nametable'];
$namafail = $_FILES['namafail']['name'];
$fail = fopen($namafail, "r");
while (!feof($fail)) {
    $medan = explode(",", fgets($fail));
    if ($nametable === "homestay") {
        $norumah = $medan[0];
        $namarumah =  $medan[1];
        $harga = $medan[2];
        $sql = "insert into homestay values ('$norumah','$namarumah','$harga')";
        if (mysqli_query($sambungan, $sql))
            $berjaya = true;
        else
            $berjaya = false;
    }
    if ($nametable === "klien") {
        $nokp = $medan[0];
        $namaklien = $medan[1];
        $notel = $medan[2];
        $alamat = $medan[3];
        $sql ="insert into klien values ('$nokp','$namaklien','$notel','$alamat')";
        if (mysqli_query($sambungan, $sql))
            $berjaya = true;
        else
            $berjaya = false;
    }
}
if ($berjaya == true)
    echo "<script>alert('Rekod berjaya di import');</script>";
else
    echo "<script>alert('Rekod tidak berjaya di import');</script>";
echo "<script>window.location='homestay_senarai.php'</script>";
mysqli_close($sambungan);
?>