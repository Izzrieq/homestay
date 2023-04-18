<?php
include('sambungan.php'); 
if (isset($_POST['nokp'])) {
$nokp = $_POST['nokp'];
$namaklien = $_POST['namaklien'];
$notel = $_POST['notel'];
$alamat = $_POST['alamat'];
    $sql = "insert into klien (nokp, namaklien, notel, alamat)
    values ('$nokp', '$namaklien','$notel', '$alamat')";
    $result = mysqli_query($sambungan, $sql);
    if ($result)
        echo "<script>alert('Berjaya mendaftar klien')</script>";
    else 
        echo "<script>alert('Tidak berjaya mendaftar')</script>";
    echo "<script>window.location = 'klien_senarai.php'</script>";
}
?>

<html>
<link rel="stylesheet" href="borang.css">
<body>
    <h3 class="klien">TAMBAH KLIEN BARU</h3>
    <form action="klien_insert.php" method="post" class="klien">
        <table>
            <tr>
                <td class=warna> Nombor KP </td>
                <td> <input type="text" name="nokp" placeholder="070802027234"> </td>
            </tr>
            <tr>
                <td class=warna> Nama Anda </td>
                <td> <input type="text" name="namaklien" placeholder="FATIMAH HASSAN"> </td>
            </tr>
            <tr>
                <td class=warna> No Tel </td>
                <td> <input type="text" name="notel" placeholder="013-6732814"></td>
            </tr>
            <tr>
                <td class=warna> Alamat </td>
                <td> <input type="text" name="alamat" placeholder="IPOH, PERAK"></td>
            </tr>
        </table>
        <button class="save" type="submit">Simpan</button>
    </form>
    
    <center>
    <button class=biru  onclick="tukar_warna(0)">Biru</button>
    <button class=hijau onclick="tukar_warna(1)">Hijau</button>
    <button class=merah onclick="tukar_warna(2)">Merah</button>
    <button class=hitam onclick="tukar_warna(3)">Hitam</button>
    </center>    
   


<script>
    function semak() {
       var id = document.getElementById("id").value;
        if (id === "")
            alert("Sila masukkan idsewaan");
        else if (id.length > 4)
            alert("Sila masukkan id tidak lebih dari 4 aksara");
    }

    function tukar_warna(n) {
        var warna = ["Blue", "Green", "Red", "Black"];
        var teks = document.getElementsByClassName("warna");
        for (var i = 0; i < teks.length; i++)
        teks[i].style.color = warna[n];
    }
</script>
</body>
</html>

