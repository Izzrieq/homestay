<?php
include('sambungan.php'); 
if(isset($_POST['nokp'])) {    
    $nokp = $_POST['nokp'];
    $namaklien = $_POST['namaklien'];
	$notel = $_POST['notel'];
    $alamat = $_POST['alamat'];
    $sql = "update klien set namaklien='$namaklien', notel='$notel', 
	alamat = '$alamat' where nokp = $nokp";
    $result = mysqli_query($sambungan, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='klien_senarai.php'</script>";
}
$nokp = $_GET['nokp'];
$sql = "select * from klien where nokp = '$nokp' ";
$result = mysqli_query($sambungan, $sql);
while ($klien = mysqli_fetch_array($result)) {
    $namaklien = $klien['namaklien'];
    $notel = $klien['notel'];
    $alamat = $klien['alamat'];
}
?>


<html>
<link rel="stylesheet" href="borang.css">
<body>
    <h3 class="klien">KEMASKINI KLIEN</h3>
    <form action="klien_update.php" method="POST" class="klien">
        <table>
        <tr>
        <td>Nombor KP</td>
        <td>
             <input class="readonly" readonly type="text" name="nokp" value='<?php echo $nokp;?>'>
        </td>
        </tr>     
        <tr>
        <td>Nama:</td>
        <td><input type="text" name="namaklien" value="<?php echo $namaklien;?>"></td>
        </tr>
        <tr>
        <td>No Tel:</td>
        <td><input type="text" name="notel" value="<?php echo $notel;?>"></td>
        </tr>
        <tr>
        <td>Alamat:</td>
        <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
        </tr>
        </table>
        <button class="update" type="submit">Update</button>
    </form>
</body>
</html>
