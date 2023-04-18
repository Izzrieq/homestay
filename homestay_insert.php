<?php
include('sambungan.php');
if (isset($_POST['namarumah'])) {
    $norumah = $_POST['norumah'];
    $namarumah = $_POST['namarumah'];
    $harga = $_POST['harga'];
    $sql = "insert into homestay values ('$norumah', '$namarumah', $harga)";
    $result = mysqli_query($sambungan, $sql);
    if ($result)
        echo "<script>alert('Rekod berjaya ditambah')</script>";
    else
        echo "<script>alert('Rekod tidak berjaya ditambah')</script>";
    echo "<script>window.location='homestay_senarai.php'</script>";
    }
?>
<html>
<link rel="stylesheet" href="borang.css">
<body>
  <h3 class="homestay">TAMBAH HOMESTAY BARU</h3>
  <form action="homestay_insert.php" method="post" class="homestay">
    <table>
       <tr>
           <td>Nombor Rumah</td>
           <td>
           <input type="text" name="norumah">
           </td>
        </tr>
        <tr>
            <td>Nama Homestay</td>
            <td><input type="text" name="namarumah"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga"></td>
        </tr>
      </table>
      <button class="add" type="submit">Tambah</button>
    </form>
 </body>
 </html>
                  