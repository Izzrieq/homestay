<?php
  include('sambungan.php');
  $norumah = $_GET['norumah'];
  $sql = "delete from homestay where norumah='$norumah'";
  $result = mysqli_query($sambungan, $sql);
if($result)
    echo "<script>alert('Berjaya padam rekod)</script>";
else
    echo "<script>alert('Tidak berjaya padam rekod)</script>";
echo "<script>window.location='homestay_senarai.php'</script>";
?>