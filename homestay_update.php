<?php
include('sambungan.php');
if(isset($_POST['norumah'])) {
    $norumah = $_POST['norumah'];
    $namarumah=$_POST['namarumah'];
    $harga=$_POST['harga'];
    $sql = "update homestay set
    namarumah='$namarumah',harga=$harga where norumah='$norumah'"; 
    $result = mysqli_query($sambungan, $sql);
    if($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='homestay_senarai.php'</script>";
 }
$norumah = $_GET['norumah'];
$sql = "select *from homestay where norumah = '$norumah' ";
$result  = mysqli_query($sambungan, $sql);
while($homestay = mysqli_fetch_array($result)) {
    $namarumah = $homestay['namarumah'];
    $harga = $homestay['harga'];
}
?>
<html>
<link rel="stylesheet" href="borang.css">
<body>
    <h3 class="homestay">KEMASKINI HOMESTAY</h3>
    <form action="homestay_update.php" method="post" class="homestay">
     <table>
         <tr>
             <td>Nombor Rumah</td>
             <td>
                 <input class="readonly" readonly type="text" name="norumah" value='<?php echo $norumah;?>'>
             </td>
           </tr>
           <tr>
               <td>Nama Homestay</td>
               <td>
                   <input type="text" name="namarumah"
                   value="<?php echo $namarumah;?>">
               </td>
          </tr>
           <tr>
               <td>Harga</td>
               <td>
                   <input type="text"name="harga" value="<?php echo $harga;?>">
                </td>
             </tr> 
             <tr>
         </table>
         <button class="update" type="submit">Update</button>
      </form>
    </body>
    </html>
             