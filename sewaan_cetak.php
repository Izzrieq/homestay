<?php
    include('sambungan.php');
    $idsewaan = $_GET['idsewaan_form'];
    $sql = "select * from sewaan 
        join homestay on sewaan.norumah = homestay.norumah 
        join klien on sewaan.nokp = klien.nokp where idsewaan = $idsewaan";
    $data = mysqli_query($sambungan, $sql);        
	$sewaan = mysqli_fetch_array($data);
    $tarikh_masuk = date_create($sewaan['tmasuk']);
    $tarikh_keluar = date_create($sewaan['tkeluar']);
    $beza = date_diff($tarikh_masuk, $tarikh_keluar);
    $bilHari = $beza->format("%a"); 
?> 
<html>
<link rel="stylesheet" href="senarai.css">
<body>
        <table>
            <caption>RESIT BAYARAN</caption>
             <tr>
                <th> Perkara </th> <th> Maklumat </th>
            </tr>           
            <tr>
                <td> Nombor KP </td>  <td> <?php echo $sewaan['nokp']; ?> </td>
            </tr>
            <tr>
                <td> Nama </td> <td> <?php echo $sewaan['namaklien']; ?> </td>
            </tr>
            <tr>
                <td> No Tel </td>  <td> <?php echo $sewaan['notel']; ?></td>
            </tr>
            <tr>
                <td> Alamat </td>  <td> <?php echo $sewaan['alamat']; ?></td>
            </tr>
            <tr>
                <td> Tarikh Masuk </td>  <td> <?php echo $sewaan['tmasuk']; ?> </td>
            </tr>
            <tr>
                <td> Tarikh Keluar </td>  <td> <?php echo $sewaan['tkeluar']; ?> </td>
            </tr>
            <tr>
                <td> Homestay </td>  <td> <?php echo $sewaan['namarumah']; ?></td>
            </tr>
            <tr>
                <td> Harga </td>  <td> <?php echo $sewaan['harga']; ?></td>
            </tr>
            <tr>
                <td> Bilangan Hari </td>  <td> <?php echo $bilHari; ?></td>
            </tr>
            <tr>
                <td> Bayaran </td>  
                <td> RM
                <?php 
                $bayaran =  $sewaan['harga']*$bilHari;    
                echo number_format($bayaran, 2);
                ?>
                </td>
            </tr>
        </table>
        <button class="cetak" onclick="window.print()">Cetak</button>
</body>
</html>
