<?php
include('sambungan.php'); 
if (isset($_POST['nokp'])) {
	$nokp = $_POST['nokp'];
	$tarikh_masuk = $_POST['tarikh_masuk'];
	$tarikh_keluar= $_POST['tarikh_keluar'];
    $norumah = $_POST['norumah'];
    $sql = "insert into sewaan value (NULL,'$tarikh_masuk', '$tarikh_keluar', 
        '$norumah', '$nokp')";	
    $result = mysqli_query($sambungan, $sql);
    if ($result)
        echo "<script>alert('Berjaya membuat tempahan')</script>";
    else 
        echo "<script>alert('Tidak berjaya membuat tempahan')</script>";
    echo "<script>window.location='sewaan_senarai.php'</script>";	
}
?>

<html>
<link rel="stylesheet" href="borang.css">
<body>
<h3 class="sewaan">Sewaan</h3>
<form class="sewaan" action="sewaan_insert.php" method="post" >
    <table>
    <tr>
    <td>Nama Klien</td>
    <td>
        <select name="nokp">
        <option></option>
        <?php
            $sql = "select * from klien";
            $data = mysqli_query($sambungan, $sql);
            while ($klien = mysqli_fetch_array($data)) {
                echo "<option value='$klien[nokp]'>$klien[namaklien]</option>";		
            }
        ?>
        </select>
    </td>
    </tr>

    <tr>
    <td>Homestay</td>
    <td>
        <select name="norumah">
        <option></option>
        <?php
            $sql = "select * from homestay";
            $data2 = mysqli_query($sambungan, $sql);
            while ($rumah = mysqli_fetch_array($data2))   {
                echo "<option value='$rumah[norumah]'>$rumah[namarumah]</option>";		
           }
        ?>
        </select>
    </td>
    </tr>
    <tr>
        <td>Tarikh Masuk</td>
        <td><input type="date" name="tarikh_masuk"></td>
    </tr>
    <tr>
        <td>Tarikh Keluar</td>
        <td><input type="date" name="tarikh_keluar"></td>
    </tr>
</table>
<button class="tempah" type="submit">Sewa</button>   
</form>	
</body>
</html>
