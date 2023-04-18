<?php
include('sambungan.php'); 
?>
<html>
<link rel="stylesheet" href="senarai.css">
<body>
  <table>
    <caption>SENARAI KLIEN</caption>
    <tr>
       <th>Bil</th>
       <th>No KP</th>
       <th>Nama</th>
       <th>No Tel</th>
       <th>Alamat</th>
       <th>Operasi</th>
   </tr>
   <?php
   $sql = "select * from klien order by namaklien ASC";
   $data = mysqli_query($sambungan, $sql);		
   $bil = 1;          
   while ($klien = mysqli_fetch_array($data)) {
   ?>
   <tr>
      <td><?php echo $bil; ?></td>
      <td><?php echo $klien['nokp']; ?></td>
      <td><?php echo $klien['namaklien']; ?></td>
      <td><?php echo $klien['notel']; ?></td>
      <td><?php echo $klien['alamat']; ?></td>
      <td>
         <a href="klien_update.php?nokp=<?php echo $klien['nokp'];?>">
           <img src=update.png>
        </a>
        <a href="klien_delete.php?nokp=<?php echo $klien['nokp'];?>">
          <img src=delete.png>
        </a>
     </td>
  </tr>
  <?php $bil = $bil + 1; } ?>
</table>
</body>
</html>