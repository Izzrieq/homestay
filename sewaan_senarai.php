<html>
<link rel="stylesheet" href="senarai.css">
<body>
<table>
<caption>SENARAI STATUS SEWAAN BILIK</caption>
  <tr>
    <th>Bil</th>
    <th>Homestay</th>
    <th>Tarikh Masuk</th>
    <th>Tarikh Keluar</th>  
    <th>Bil Hari</th>
    <th>Nama</th>
    <th>Operasi</th>
  </tr>
  <?php
    // setting tarikh dan masa mengikut zon
    date_default_timezone_set("Asia/Kuala_Lumpur");
    include('sambungan.php');
    $bil = 1; 
    // cantumkan semua table
    $sql = "select * from sewaan 
    join homestay on sewaan.norumah = homestay.norumah 
    join klien on sewaan.nokp = klien.nokp";
    
    $data = mysqli_query($sambungan, $sql);        
	while ($sewaan = mysqli_fetch_array($data)) {
		$tarikh_masuk = date_create($sewaan['tmasuk']);
		$tarikh_keluar = date_create($sewaan['tkeluar']);
		$beza = date_diff($tarikh_masuk, $tarikh_keluar);
		$bilHari = $beza->format("%a"); // mencari bilangan hari	
    ?>
      <tr>
        <td><?php echo $bil ?></td>
        <td><?php echo $sewaan['namarumah']; ?></td>
        <td><?php echo date("d/m/y", strtotime($sewaan['tmasuk'])); ?></td>
        <td><?php echo date("d/m/y", strtotime($sewaan['tkeluar'])); ?></td>                 
        <td><?php echo $beza->format("%a"); ?></td>
        <td><?php echo $sewaan['namaklien']; ?></td>
        <td>
           <a href="sewaan_delete.php?idsewaan_form=<?php echo $sewaan['idsewaan'];?>">
           <img src="delete.png">
           </a>
           <a href="sewaan_cetak.php?idsewaan_form=<?php echo $sewaan['idsewaan'];?>">
           <img src="printer-icon.png">
           </a>
        </td>
      </tr>
      <?php
        $bil = $bil + 1; 
      } //while
      ?>
</table>
</body>
</html>
